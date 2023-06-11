export default {

    hideOnScrollY: 60,

    heroBackgroundSvg: {
        desktop: {
            numEachSvg: 5, // define the duplication number for each svg
            maxDelaySeconds: 7, // in seconds
            topRange: [[15, 32], [65, 85]],
            leftRange: [[5, 95]],
        },
        mobile: {
            numEachSvg: 3,
            maxDelaySeconds: 3,
            topRange: [[5, 28], [88, 95]],
            leftRange: [[5, 95]],
        },
        mobileBreakpoint: 1024,
    }
};