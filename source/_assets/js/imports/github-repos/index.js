import card from "./templates/card";
import skeleton from "./templates/skeleton";

export default function (githubRepos, packagistRepos) {
    var githubReposFetched = false;

    const openSourceSection = document.getElementsByClassName("open-source-section")[0];
    const openSourceSectionOffsetTop = openSourceSection.offsetTop;
    const cards = openSourceSection.querySelector(".cards");

    window.addEventListener('scroll', () => {
        const windowOffset = window.scrollY + window.innerHeight;
        if (windowOffset >= (openSourceSectionOffsetTop + (openSourceSection.offsetHeight / 2)) && !githubReposFetched) {
            githubReposFetched = true;

            // show loading skeletons
            githubRepos.forEach(repo => cards.innerHTML += skeleton(repo));

            const reposCache = JSON.parse(localStorage.getItem('repos'));
            // console.log(reposCache, (new Date().getTime()), (new Date().getTime()) < reposCache.ttl);
            if (reposCache && (new Date().getTime()) < reposCache.ttl) {
                reposCache.data.forEach(repo => renderRepository(repo));
                return;
            }


            const cardsData = [];
            githubRepos.forEach(async repo => {
                await fetch(`https://api.github.com/repos/${repo}`).then(res => {
                    if (res.ok) {
                        return res.json();
                    }

                    throw new Error("Unable to fetch");
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

                    if (packagistRepos.includes(repo)) {
                        const packagistStats = await fetch(`https://packagist.org/packages/${repo}/stats.json`);
                        const packagistStatsJson = await packagistStats.json();
                        cardData.downloads = {
                            url: `https://packagist.org/packages/${repo}`,
                            count: packagistStatsJson.downloads.total
                        };
                    }

                    cardsData.push(cardData);
                    renderRepository(cardData);
                });


                if (cardsData.length) {
                    var ttl = new Date(), hours = 10 / 60;
                    ttl.setTime(ttl.getTime() + hours * 60 * 60 * 1000);
                    localStorage.setItem('repos', JSON.stringify({
                        data: cardsData,
                        ttl: ttl.getTime()
                    }));
                }
            });
        }
    });

    async function renderRepository(data) {
        const skeleton = openSourceSection.querySelector(`.skeleton[data-repo="${data.githubRepo.full_name.toLowerCase()}"]`);
        const timeout = Number.parseFloat((Math.random() * 1).toFixed(1)) * 1000;
        const div = document.createElement('div');
        div.innerHTML = (await card(data)).trim();
        setTimeout(() => skeleton.replaceWith(div.firstChild), timeout);
    }
}