import heroBackgroundEffects from "./hero-background-effects";

export default function (hideOnScrollY) {
    window.addEventListener('scroll', () => {
        handleSocialLinks($topSectionFooterSocialLinks, hideOnScrollY, window.scrollY);
        handleLangSwitcher($topSectionFooterLangSwitcher, hideOnScrollY, window.scrollY);
        handleScrollDownIndicator($topSectionFooterScrollDownIndicator, hideOnScrollY, window.scrollY);
        handleDarkModeBtn($topSectionFooterDarkModeBtn, hideOnScrollY, window.scrollY, window.innerWidth);
        handleBackgroundSvgs(hideOnScrollY, window.scrollY);
    });
}

const $topSectionFooterSocialLinks = document.getElementById('top-section-footer-social-links');
const $topSectionFooterLangSwitcher = document.getElementById('top-section-footer-lang-switcher-container');
const $topSectionFooterDarkModeBtn = document.getElementById('top-section-footer-dark-mode-toggle-btn');
const $topSectionFooterScrollDownIndicator = document.getElementById('top-section-footer-scroll-down-indicator');
const transitionClasses = [
    'transition-all',
    'ease-in-out',
    'duration-700'
];
const addTransitionClasses = $ele => {
    transitionClasses.map(cls => $ele.classList.add(cls));
};
const removeTransitionClasses = $ele => {
    transitionClasses.map(cls => $ele.classList.remove(cls));
};

function handleSocialLinks($ele, hideOnScrollY, scrollY) {
    if (scrollY > hideOnScrollY) {
        removeTransitionClasses($ele);
        $ele.classList.remove('lg:bottom-20');
        $ele.classList.add('lg:-bottom-96');
        $ele.classList.add('invisible');
    } else {
        addTransitionClasses($ele);
        $ele.classList.remove('invisible');
        $ele.classList.add('lg:bottom-20');
        $ele.classList.remove('lg:-bottom-96');
    }
}

function handleLangSwitcher($ele, hideOnScrollY, scrollY) {
    if (scrollY > hideOnScrollY) {
        removeTransitionClasses($ele);
        $ele.classList.remove('lg:bottom-12');
        $ele.classList.add('lg:-bottom-96');
        $ele.classList.add('invisible');
    } else {
        addTransitionClasses($ele);
        $ele.classList.remove('invisible');
        $ele.classList.add('lg:bottom-12');
        $ele.classList.remove('lg:-bottom-96');
    }
}

function handleScrollDownIndicator($ele, hideOnScrollY, scrollY) {
    if (scrollY > hideOnScrollY) {
        removeTransitionClasses($ele);
        $ele.classList.add('opacity-0');
    } else {
        addTransitionClasses($ele);
        $ele.classList.remove('opacity-0');
    }
}

function handleDarkModeBtn($ele, hideOnScrollY, scrollY, winWidth) {
    if (winWidth >= 1024) {
        return;
    }

    if (scrollY > hideOnScrollY) {
        removeTransitionClasses($ele);
        $ele.classList.add('opacity-0');
    } else {
        addTransitionClasses($ele);
        $ele.classList.remove('opacity-0');
    }
}

function handleBackgroundSvgs(hideOnScrollY, scrollY) {
    if (scrollY > hideOnScrollY) {
        document.querySelectorAll('#svgs-container svg.animate-sparkling').forEach($svg => {
            $svg.classList.remove('animate-sparkling');
        });
    } else {
        heroBackgroundEffects(settings.heroBackgroundSvg);
    }
}