export default {

    hideOnScrollY: 60,

    heroBackgroundSvg: {
        desktop: {
            numEachSvg: 7, // define the duplication number for each svg
            maxDelaySeconds: 7, // in seconds
            topRange: [[15, 35], [65, 85]],
            leftRange: [[5, 95]],
        },
        mobile: {
            numEachSvg: 3,
            maxDelaySeconds: 3,
            topRange: [[5, 40], [88, 95]],
            leftRange: [[5, 95]],
        },
        mobileBreakpoint: 1024,
    }
};