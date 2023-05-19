const navbarMenu = () => {
    document.getElementById('navbar-collapse-toggle-btn')
        .addEventListener(
            'click',
            () => document.getElementById('navbar-default').classList.toggle('hidden')
        );
}

const darkModeToggle = () => {
    console.log("dark mode not implemented yet.");
}

const toggleElementOnScrollDown = () => {
    window.addEventListener('scroll', () => {
        const transitionClasses = ['transition-all', 'ease-in-out', 'duration-700'];
        const $topSectionFooterSocialLinks = document.getElementById('top-section-footer-social-links');
        const $topSectionFooterLangSwitcher = document.getElementById('top-section-footer-lang-switcher');
        const $topSectionFooterDarkModeBtn = document.getElementById('top-section-footer-dark-mode-toggle-btn');
        const $topSectionFooterScrollDownIndicator = document.getElementById(
            'top-section-footer-scroll-down-indicator');
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

        function handleSocialLinks($ele, scrollY) {
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

        

        
    });
}


[

    navbarMenu, 
    darkModeToggle, 
    toggleElementOnScrollDown,

].forEach(f => f());