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

const toggleElementOnScrollDown = () => {
    window.addEventListener('scroll', () => {
        const transitionClasses = ['transition-all', 'ease-in-out', 'duration-700'];
        const $topSectionFooterSocialLinks = document.getElementById('top-section-footer-social-links');
        const $topSectionFooterLangSwitcher = document.getElementById('top-section-footer-lang-switcher');
        const $topSectionFooterDarkModeBtn = document.getElementById('top-section-footer-dark-mode-toggle-btn');
        const $topSectionFooterScrollDownIndicator = document.getElementById('top-section-footer-scroll-down-indicator');
        const helpers = {
            addTransitionClasses($ele) {
                transitionClasses.map(cls => $ele.classList.add(cls));
            },
            removeTransitionClasses($ele) {
                transitionClasses.map(cls => $ele.classList.remove(cls));
            }
        };

        handleSocialLinks($topSectionFooterSocialLinks, window.scrollY);
        handleLangSwitcher($topSectionFooterLangSwitcher, window.scrollY);
        handleScrollDownIndicator($topSectionFooterScrollDownIndicator, window.scrollY);
        handleDarkModeBtn($topSectionFooterDarkModeBtn, window.scrollY, window.innerWidth);

        function handleSocialLinks($ele, scrollY) {
            // console.log($ele, scrollY);
            if (scrollY === 0) {
                helpers.addTransitionClasses($ele);
                $ele.classList.remove('invisible');
                $ele.classList.add('lg:bottom-20');
                $ele.classList.remove('lg:-bottom-96');
                return;
            }

            helpers.removeTransitionClasses($ele);
            $ele.classList.remove('lg:bottom-20');
            $ele.classList.add('lg:-bottom-96');
            $ele.classList.add('invisible');
        }

        function handleLangSwitcher($ele, scrollY) {
            if (scrollY === 0) {
                helpers.addTransitionClasses($ele);
                $ele.classList.remove('invisible');
                $ele.classList.add('lg:bottom-12');
                $ele.classList.remove('lg:-bottom-96');
                return;
            }

            helpers.removeTransitionClasses($ele);
            $ele.classList.remove('lg:bottom-12');
            $ele.classList.add('lg:-bottom-96');
            $ele.classList.add('invisible');
        }

        function handleScrollDownIndicator($ele, scrollY) {
            if (scrollY === 0) {
                helpers.addTransitionClasses($ele);
                $ele.classList.remove('opacity-0');
                return;
            }

            helpers.removeTransitionClasses($ele);
            $ele.classList.add('opacity-0');
        }

        function handleDarkModeBtn($ele, scrollY, winWidth) {
            if (winWidth >= 1024) {
                return;
            }

            if (scrollY === 0) {
                helpers.addTransitionClasses($ele);
                $ele.classList.remove('opacity-0');
                return;
            }

            helpers.removeTransitionClasses($ele);
            $ele.classList.add('opacity-0');
        }
    });
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

[

    initDarkMode,
    navbarMenu,
    darkModeToggle,
    toggleElementOnScrollDown,

].forEach(f => f());