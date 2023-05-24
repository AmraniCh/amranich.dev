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
        const $topSectionFooterLangSwitcher = document.getElementById('top-section-footer-lang-switcher-container');
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

    function() {
        const $buttons = document.querySelectorAll('.lang-switcher-btn');
        
        $buttons.forEach($btn => {
            // if ($btn.dataset.default === 'true') {
            //     $btn.classList.add('selected');
            // }

            $btn.addEventListener('click', () => {
                $buttons.forEach($btn => $btn.classList.remove('selected'));
                $btn.classList.add('selected');
            });
        });

    },

    // function() {
    //     const $$translatedElements = document.querySelectorAll('[data-fr]');

    //     if (!$$translatedElements.length) {
    //         return;
    //     }

    //     console.log($$translatedElements);
    //     console.log($$translatedElements[0]);



    //     // store original content
    //     var originalElementsContent = [];
    //     const supportedLangs = ['en', 'fr'];
        
    //     $$translatedElements.forEach($ele => {
    //         const genUniqueId = () => {
    //             const id = `trans-${Math.floor(Math.random() * Math.pow(10, 5))}`;
    //             if (document.getElementById(id)) {
    //                 return genUniqueId();
    //             }

    //             return id;
    //         };

    //         originalElementsContent.push({
    //             id: genUniqueId(),
    //             content: $ele.textContent,
    //         });

    //         $ele.setAttribute('id', genUniqueId());
    //     });
        
    //     console.log(originalElementsContent);

    //     document.querySelectorAll('.lang-switcher-btn').forEach(btn => {

    //         btn.addEventListener('click', () => {
    //             translateElements($$translatedElements, btn.dataset.lang);
    //         });
    //     });

    //     function translateElements($elements, $targetLang) {
    //         $elements.forEach($ele => {
    //             supportedLangs.forEach(supportedLang => {
    //                 const elementDefinedLangs = Object.keys($ele.dataset);

    //                 elementDefinedLangs.forEach(eleLang => {
    //                     if (!supportedLangs.includes(eleLang)) {
    //                         throw new Error(`translation: language '${eleLang}' defined in element with id '${$ele.id}' is not supported for translation.`);
    //                     }  
    //                 });

    //                 $ele.textContent = $ele.dataset[$targetLang];
    //             });
    //         });
    //     }
    // }

].forEach(f => f());