import rawSiteInfo from "../../public/0user.json";

export interface ContactLink {
    label: string;
    text: string;
    href: string;
    target?: string;
    rel?: string;
    copy?: string;
}

export interface ExperienceItem {
    role: string;
    company?: string;
    location?: string;
    period: string;
    description: string[];
}

export interface EducationItem {
    degree: string;
    subtitle?: string;
    institution: string;
    period: string;
    details?: string[];
}

export interface SkillCategory {
    category: string;
    items: string[];
}

export interface CertificationItem {
    name: string;
    issuer?: string;
    date?: string;
    url?: string;
}

export interface AwardItem {
    title: string;
    detail: string;
    date: string;
    url?: string;
}

export interface ResumeData {
    name: string;
    role: string;
    bio: string;
    experience: ExperienceItem[];
    skills: SkillCategory[];
    education?: EducationItem[];
    certifications?: CertificationItem[];
    awards?: AwardItem[];
}

export interface SiteMeta {
    name: string;
    url: string;
    title: string;
    description: string;
    locale?: string;
    ogImage?: string;
}

export interface TextLink {
    text: string;
    url: string;
}

export interface OpenSourceRepo {
    repo: string;
    description?: string;
    packagist?: string;
    chromeWebStore?: string;
    award?: TextLink;
}

export interface PullRequestLink {
    title: string;
    url: string;
    status?: string;
}

export interface ContributionLink {
    label: string;
    text: string;
    url: string;
}

export interface Contribution {
    repo: string;
    description?: string;
    note?: string;
    links?: ContributionLink[];
    pullRequests: PullRequestLink[];
    allPullRequests?: string;
}

export interface OpenSourceData {
    github: string;
    orgs: string[];
    repos: OpenSourceRepo[];
    contributions: Contribution[];
    moreContributions?: TextLink[];
}

export interface ProjectLink {
    label: string;
    text: string;
    url: string;
}

export interface Contributor {
    name: string;
    url?: string;
}

export interface Project {
    title: string;
    repo?: string;
    subtitle?: string;
    date: string;
    short?: string;
    // false = only on the resume page, not on the Recent work page.
    recentWork?: boolean;
    paragraphs: string[];
    material?: string;
    stack: string[];
    contributors?: Contributor[];
    associatedWith?: string;
    links: ProjectLink[];
}

export interface SiteInfo {
    name: string;
    role: string;
    blog: boolean;
    site: SiteMeta;
    contacts: ContactLink[];
    projects: Project[];
    openSource: OpenSourceData;
    resume: ResumeData;
}

export const info: SiteInfo = rawSiteInfo as SiteInfo;

export const contacts = info.contacts;
export const openSource = info.openSource;
export const resume = info.resume;

export default info;