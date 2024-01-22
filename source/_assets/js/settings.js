export default {

    hideOnScrollY: 60,

    heroBackgroundSvg: {
        desktop: {
            numEachSvg: 5, // define the duplication number for each svg
            maxDelaySeconds: 7, // in seconds
            topRange: [[15, 32], [65, 85]],
            leftRange: [[10, 90]],
        },
        mobile: {
            numEachSvg: 3,
            maxDelaySeconds: 3,
            topRange: [[5, 28], [88, 95]],
            leftRange: [[10, 90]],
        },
        mobileBreakpoint: 1024,
    },

    githubRepos: {
        pinnedRepos: [
            "lazzard/php-ftp-client",
            "amranich/github-code-font-changer",
            "amranich/ftp-filemanager",
            "amranich/vanilla-filemanager",
            "amranich/ajax-router",
            "amranich/how-jQuery-works"
        ],
        packagistRepos: [
            "lazzard/php-ftp-client",
            "amranich/ajax-router",
        ],
        cacheExpireHours: 8,
        skeletonTimeoutSeconds: 2.5
    }
};