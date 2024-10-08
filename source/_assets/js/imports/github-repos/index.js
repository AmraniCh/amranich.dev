import card from "./templates/card";
import skeleton from "./templates/skeleton";

export default function (settings) {
    var githubReposFetched = false;

    const openSourceSection = document.getElementsByClassName("opensource-section")[0];
    const cardsContainer = openSourceSection.querySelector(".cards-ctr");
    const openSourceSectionOffsetTop = openSourceSection.offsetTop;

    clearRepositories();

    document.getElementById("wrapper").addEventListener('scroll', function () {
        const windowOffset = this.scrollTop + window.innerHeight;
        if (windowOffset < (openSourceSectionOffsetTop + (openSourceSection.offsetHeight / 2)) || githubReposFetched) {
            return;
        }

        githubReposFetched = true;

        // render loading skeletons
        cardsContainer.innerHTML = '';
        settings.pinnedRepos.forEach(repo => cardsContainer.innerHTML += skeleton(repo));

        const reposCache = JSON.parse(localStorage.getItem('repos'));

        if (reposCache && (new Date().getTime()) < reposCache.ttl) {
            reposCache.data.forEach(repo => renderRepository(repo));
            return;
        }

        if (!localStorage.getItem('repos') || (reposCache && (new Date().getTime()) >= reposCache.ttl)) {
            const ttl = new Date();
            ttl.setTime(ttl.getTime() + settings.cacheExpireHours * 60 * 60 * 1000);
            localStorage.setItem('repos', JSON.stringify({
                data: [],
                ttl: ttl.getTime()
            }));
        }

        settings.pinnedRepos.forEach(async repo => {
            await fetch(`https://api.github.com/repos/${repo}`).then(res => {
                if (res.ok) {
                    return res.json();
                }

                throw new Error("Unable to fetch the repositories from GitHub API.");
            }).then(async json => {
                var cardData = {
                    githubRepo: json,
                };

                const githubLangsResponse = await fetch(`https://api.github.com/repos/${repo}/languages`);
                if (githubLangsResponse.ok) {
                    const githubLangsJson = await githubLangsResponse.json();
                    const githubLangs = Object.keys(githubLangsJson);
                    cardData = { ...cardData, githubLangs };
                }

                if (settings.packagistRepos.includes(repo)) {
                    const packagistStats = await fetch(`https://packagist.org/packages/${repo}/stats.json`);
                    const packagistStatsJson = await packagistStats.json();
                    cardData.downloads = {
                        url: `https://packagist.org/packages/${repo}`,
                        count: packagistStatsJson.downloads.total
                    };
                }

                renderRepository(cardData);

                const reposFromCache = JSON.parse(localStorage.getItem('repos'));
                if (Array.isArray(reposFromCache.data)) {
                    localStorage.setItem('repos', JSON.stringify({
                        data: reposFromCache.data.concat([cardData]),
                        ttl: reposFromCache.ttl
                    }));
                }
            });
        });
    });

    function clearRepositories() {
        const cards = Array.from(cardsContainer.querySelectorAll('.card'));
        if (cards.length === 0) {
            return;
        }

        cards.forEach(card => card.remove());
    }

    async function renderRepository(data) {
        const skeleton = openSourceSection.querySelector(`.skeleton[data-repo="${data.githubRepo.full_name.toLowerCase()}"]`);
        const timeout = Number.parseFloat((Math.random() * settings.skeletonTimeoutSeconds).toFixed(1)) * 1000;
        const div = document.createElement('div');
        div.innerHTML = (await card(data)).trim();
        setTimeout(() => skeleton.replaceWith(div.firstChild), timeout);
    }
}