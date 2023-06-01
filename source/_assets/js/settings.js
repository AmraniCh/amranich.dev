export default {

    hideOnScrollY: 60,

    heroBackgroundSvg: {
        desktop: {
            numEachSvg: 9, // if we have two svgs so 18 will be rendered
            maxDelaySeconds: 10, // => 10 seconds
        },
        mobile: {
            numEachSvg: 4,
            maxDelaySeconds: 5,
        },
        mobileBreakpoint: 1024,
    }
};