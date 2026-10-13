import { openSource } from './info.ts';
import type { Contribution, OpenSourceRepo, TextLink } from './info.ts';

// Everything here runs at build time only. The numbers are refreshed on
// every build, so the page shows nothing that is fetched in the browser.

interface GitHubRepo {
    full_name: string;
    html_url: string;
    description: string | null;
    stargazers_count: number;
    forks_count: number;
    fork: boolean;
}

export interface RepoStats {
    name: string;
    url: string;
    description: string;
    stars: number;
    forks: number;
    commits: number;
    languages: string[];
    downloads?: { count: number; label: string; url: string };
    award?: TextLink;
}

export interface ContributionStats extends Contribution {
    url: string;
    description: string;
}

export interface OpenSourceStats {
    profileUrl: string;
    followers: number;
    totalStars: number;
    repos: RepoStats[];
    contributions: ContributionStats[];
}

async function request(url: string): Promise<Response> {
    const headers: Record<string, string> = { 'User-Agent': 'amranich.dev' };
    // Without a token GitHub allows only 60 requests per hour. Set GITHUB_TOKEN
    // in .env for local work (a fine-grained token with public read access).
    const token = import.meta.env.GITHUB_TOKEN ?? process.env.GITHUB_TOKEN;
    const isGitHub = url.startsWith('https://api.github.com/');
    if (token && isGitHub) {
        headers.Authorization = `Bearer ${token}`;
    }

    // Retry network errors and 5xx answers, so one short failure does not
    // stop the whole build.
    let response: Response | undefined;
    for (let attempt = 1; ; attempt++) {
        try {
            response = await fetch(url, { headers });
            if (response.status < 500 || attempt === 3) break;
        } catch (error) {
            if (attempt === 3) throw new Error(`Open source stats: ${url} failed (${error})`);
        }
        await new Promise((resolve) => setTimeout(resolve, 1000 * attempt));
    }

    if (!response.ok) {
        const hint = isGitHub && !token && (response.status === 403 || response.status === 429)
            ? ' (GitHub rate limit: set GITHUB_TOKEN in .env)'
            : '';
        throw new Error(`Open source stats: ${url} returned ${response.status}${hint}`);
    }
    return response;
}

async function getJson<T>(url: string): Promise<T> {
    const response = await request(url);
    return response.json() as Promise<T>;
}

// GitHub has no commit count field. With one commit per page, the page
// number of the "last" link is the total number of commits.
async function loadCommitCount(repo: string): Promise<number> {
    const response = await request(`https://api.github.com/repos/${repo}/commits?per_page=1`);
    const last = response.headers.get('link')?.match(/[?&]page=(\d+)>;\s*rel="last"/);
    if (last) {
        return Number.parseInt(last[1], 10);
    }
    const commits = await response.json() as unknown[];
    return commits.length;
}

const commitCounts = new Map<string, Promise<number>>();

export function getCommitCount(repo: string): Promise<number> {
    let count = commitCounts.get(repo);
    if (!count) {
        count = loadCommitCount(repo).catch((error) => {
            commitCounts.delete(repo);
            throw error;
        });
        commitCounts.set(repo, count);
    }
    return count;
}

// GitHub descriptions often start with an emoji (":package:" or a real one),
// which is noise here.
function cleanDescription(text: string | null): string {
    return (text ?? '')
        .replace(/:[a-z0-9_+-]+:\s*/g, '')
        .replace(/\p{Extended_Pictographic}\uFE0F?\s*/gu, '')
        .trim();
}

async function listRepos(path: string): Promise<GitHubRepo[]> {
    return getJson<GitHubRepo[]>(`https://api.github.com/${path}/repos?per_page=100`);
}

async function getDownloads(item: OpenSourceRepo): Promise<RepoStats['downloads']> {
    if (item.packagist) {
        const data = await getJson<{ downloads: { total: number } }>(
            `https://packagist.org/packages/${item.packagist}/stats.json`,
        );
        return {
            count: data.downloads.total,
            label: 'downloads',
            url: `https://packagist.org/packages/${item.packagist}`,
        };
    }

    if (item.chromeWebStore) {
        const data = await getJson<{ value: string }>(
            `https://img.shields.io/chrome-web-store/users/${item.chromeWebStore}.json`,
        );
        return {
            count: Number.parseInt(data.value, 10),
            label: 'users',
            url: `https://chromewebstore.google.com/detail/${item.chromeWebStore}`,
        };
    }

    return undefined;
}

async function load(): Promise<OpenSourceStats> {
    const { github, orgs, repos, contributions } = openSource;

    const [user, ownRepos, ...orgRepos] = await Promise.all([
        getJson<{ followers: number; html_url: string }>(`https://api.github.com/users/${github}`),
        listRepos(`users/${github}`),
        ...orgs.map((org) => listRepos(`orgs/${org}`)),
    ]);

    const allRepos = [...ownRepos, ...orgRepos.flat()].filter((repo) => !repo.fork);
    const byName = new Map(allRepos.map((repo) => [repo.full_name.toLowerCase(), repo]));

    const repoStats = await Promise.all(repos.map(async (item): Promise<RepoStats> => {
        const repo = byName.get(item.repo.toLowerCase());
        if (!repo) {
            throw new Error(`Open source stats: ${item.repo} was not found under ${github} or ${orgs.join(', ')}`);
        }

        const [languages, downloads, commits] = await Promise.all([
            getJson<Record<string, number>>(`https://api.github.com/repos/${item.repo}/languages`),
            getDownloads(item),
            getCommitCount(item.repo),
        ]);

        return {
            name: repo.full_name,
            url: repo.html_url,
            description: item.description ?? cleanDescription(repo.description),
            stars: repo.stargazers_count,
            forks: repo.forks_count,
            commits,
            languages: Object.keys(languages).slice(0, 3),
            downloads,
            award: item.award,
        };
    }));

    const contributionStats = await Promise.all(contributions.map(async (item): Promise<ContributionStats> => {
        const repo = await getJson<GitHubRepo>(`https://api.github.com/repos/${item.repo}`);
        return {
            ...item,
            url: repo.html_url,
            description: item.description ?? cleanDescription(repo.description),
        };
    }));

    return {
        profileUrl: user.html_url,
        followers: user.followers,
        totalStars: allRepos.reduce((sum, repo) => sum + repo.stargazers_count, 0),
        repos: repoStats,
        contributions: contributionStats,
    };
}

// Cached so the dev server does not call the APIs again on every reload.
let cached: Promise<OpenSourceStats> | undefined;

export function getOpenSourceStats(): Promise<OpenSourceStats> {
    cached ??= load().catch((error) => {
        cached = undefined;
        throw error;
    });
    return cached;
}

export function formatCount(count: number): string {
    return count.toLocaleString('en-US');
}
