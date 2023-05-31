const settings = {
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

const navbarMenu = () => {
    document.getElementById('navbar-collapse-toggle-btn')
        .addEventListener('click', () => document.getElementById('navbar-default').classList.toggle('hidden'));
}

const darkModeToggle = () => {
    const $button = document.getElementById('top-section-footer-dark-mode-toggle-btn');
    $button.addEventListener('click', () => {
        document.documentElement.classList.toggle('dark');
        const isDark = document.documentElement.classList.contains('dark');
        localStorage.theme = isDark ? 'dark' : 'light';
    });
}

// toggle elements when window.scrollY is greater/lesser than the hideOnScrollY value
const toggleElementOnScroll = hideOnScrollY => {
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

    window.addEventListener('scroll', () => {
        handleSocialLinks($topSectionFooterSocialLinks, window.scrollY);
        handleLangSwitcher($topSectionFooterLangSwitcher, window.scrollY);
        handleScrollDownIndicator($topSectionFooterScrollDownIndicator, window.scrollY);
        handleDarkModeBtn($topSectionFooterDarkModeBtn, window.scrollY, window.innerWidth);
        handleBackgroundSvgs(window.scrollY);
    });

    function handleSocialLinks($ele, scrollY) {
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

    function handleLangSwitcher($ele, scrollY) {
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

    function handleScrollDownIndicator($ele, scrollY) {
        if (scrollY > hideOnScrollY) {
            removeTransitionClasses($ele);
            $ele.classList.add('opacity-0');
        } else {
            addTransitionClasses($ele);
            $ele.classList.remove('opacity-0');
        }
    }

    function handleDarkModeBtn($ele, scrollY, winWidth) {
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

    function handleBackgroundSvgs(scrollY) {
        if (scrollY > hideOnScrollY) {
            document.querySelectorAll('#svgs-container svg.animate-sparkling').forEach($svg => {
                $svg.classList.remove('animate-sparkling');
            });
        } else {
            initHeroBackgroundSvgs(settings.heroBackgroundSvg);
        }
    }
}

const initDarkMode = () => {
    const isOsDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const isStorageTheme = localStorage.theme !== undefined;
    const isStorageDark = isStorageTheme && localStorage.theme === 'dark';

    if (isStorageTheme) {
        document.documentElement.classList[isStorageDark ? 'add' : 'remove']('dark');
    } else {
        document.documentElement.classList[isOsDark ? 'add' : 'remove']('dark');
        localStorage.theme = isOsDark ? 'dark' : 'light';
    }
}

const languageSwitcher = () => {
    const $selectedLangBtn = document.querySelector('.lang-switcher-btn.selected');
    if ($selectedLangBtn === null) {
        document.querySelector('.lang-switcher-btn[data-default="true"]').classList.add('selected');
    }
}

const initHeroBackgroundSvgs = settings => {
    const $svgsContainer = document.getElementById('svgs-container');
    const $svgs = [
        `<svg class="w-5 h-5 fill-yellow text-yellow absolute -z-10 animate-sparkling opacity-0"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
        </svg>`,
        `<svg class="w-5 h-5 fill-yellow text-yellow absolute -z-10 animate-sparkling opacity-0"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
        </svg>`,
    ];

    $svgsContainer.innerHTML = '';

    console.log(settings.mobile);
    console.log(window.innerWidth >= settings.mobileBreakpoint ? 'desktop' : 'mobile');
    console.log(settings[window.innerWidth >= settings.mobileBreakpoint ? 'desktop' : 'mobile']);
    console.log(settings[window.innerWidth >= settings.mobileBreakpoint ? 'desktop' : 'mobile'].numEachSvg);

    const numEachSvg = settings[window.innerWidth >= settings.mobileBreakpoint ? 'desktop' : 'mobile'].numEachSvg;
    const maxDelaySeconds = settings[window.innerWidth >= settings.mobileBreakpoint ? 'desktop' : 'mobile'].maxDelaySeconds;

    $svgs.forEach($svg => {

        for (var j = 0; j < numEachSvg; j++) {
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = $svg;
            const $svgElement = tempDiv.firstChild;

            const max = 85;
            const min = 15;
            const randTop = Math.round(Math.random() * (max - min) + min);
            const randLeft = Math.round(Math.random() * (max - min) + min);

            $svgElement.style.top = randTop + '%';
            $svgElement.style.left = randLeft + '%';

            $svgElement.classList.add('animate-[fade-in]');
            $svgElement.style.animationDelay = Math.round(Math.random() * maxDelaySeconds * 10) / 10 + 's';

            $svgsContainer.appendChild($svgElement);
        }
    });

}

initDarkMode();
navbarMenu();
darkModeToggle();
languageSwitcher();
toggleElementOnScroll(settings.hideOnScrollY);
initHeroBackgroundSvgs(settings.heroBackgroundSvg);
