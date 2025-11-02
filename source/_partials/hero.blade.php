<div class="hero-section scroll-spy-indicator-subscriber flex flex-col justify-between px-4 lg:px-16 mb-6 relative z-0"
    data-scroll-indicator-text="{!! $page->trans('scroll-indicator.hero') !!}">

    <!-- Top Bar Start -->
    <div class="flex justify-between items-center flex-wrap">
        <a href="/">
            <img class="w-16 lg:w-24 mb-4 select-none opacity-0 animate-[fadeIn_.6s_ease-out_.1s_forwards] lg:animate-[fadeIn_.3s_ease-out_.1s_forwards]"
                src="/assets/images/logo.svg" alt="El Amrani Chakir">
        </a>

        <button type="button" class="lg:hidden float-right opacity-0 animate-[fadeIn_.6s_ease-out_.3s_forwards]"
            id="navbar-collapse-toggle-btn">
            <svg class="w-8 h-8 fill-brown-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>

        <ul id="navbar-default"
            class="hidden text-lg absolute top-[10%] left-[50%] translate-x-[-50%] lg:flex flex-col gap-3 grow-1 bg-white border border-yellow-800 rounded p-4 w-[92%] shadow-lg z-10 lg:text-yellow-900 lg:shadow-none lg:translate-x-0 lg:gap-12 lg:items-center lg:justify-end lg:flex-row lg:sticky lg:bg-transparent lg:w-auto xl:gap-[3.6rem] lg:border-none dark:bg-brown-900 dark:lg:bg-transparent dark:border-yellow-200">
            <li>
                <a href="#home"
                    class="hero-nav-item line-before-static lg:opacity-0 lg:animate-[fadeInDown_.3s_ease-out_.1s_forwards]">
                    {{ $page->trans('nav.home') }}
                </a>
            </li>
            <li>
                <a href="#career-section"
                    class="hero-nav-item line-before line-before-hover lg:opacity-0 lg:animate-[fadeInDown_.5s_ease-out_.2s_forwards]">
                    {{ $page->trans('nav.1') }}
                </a>
            </li>
            <li>
                <a href="#projects-section"
                    class="hero-nav-item line-before line-before-hover lg:opacity-0 lg:animate-[fadeInDown_.5s_ease-out_.3s_forwards]">
                    {{ $page->trans('nav.2') }}
                </a>
            </li>
            <li>
                <a href="#opensource-section"
                    class="hero-nav-item line-before line-before-hover lg:opacity-0 lg:animate-[fadeInDown_.5s_ease-out_.4s_forwards]">
                    {{ $page->trans('nav.3') }}
                </a>
            </li>
            <li>
                <a href="#contact-section"
                    class="hero-nav-item line-before line-before-hover lg:opacity-0 lg:animate-[fadeInDown_.5s_ease-out_.5s_forwards]">
                    {{ $page->trans('nav.4') }}
                </a>
            </li>
            <li>
                <!-- Dark Mode Switcher Start -->
                <button
                    class="dark-mode-toggle-btn hidden absolute top-1 -right-2 h-12 w-12 rounded-lg p-2 bg-brown-500 opacity-0 animate-[heroControlsFadeInUp_.5s_ease-out_1.1s_forwards] lg:block lg:bg-transparent lg:hover:bg-yellow-100 lg:animate-[fadeInDown_.3s_ease-out_.6s_forwards] dark:hover:bg-yellow-50">
                    <svg class="fill-yellow-800 block dark:hidden" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg class="fill-yellow-400 hidden dark:block" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <!-- Dark Mode Switcher End -->
            </li>
        </ul>
    </div>
    <!-- Top Bar End -->

    <!-- Intro Start -->
    <div
        class="flex items-center flex-col lg:mb-16 lg:flex-row lg:justify-between md:px-8 xl:gap-5 xl:px-28 lg:translate-x-[36px] xl:translate-x-[56px]">

        <img class="rounded-full mb-2 w-40 select-none opacity-0 animate-[fadeInUp_.5s_ease-out_.4s_forwards] lg:w-[375px] lg:h-[90%] lg:animate-[fadeInUp_.5s_ease-out_.8s_forwards]"
            src="/assets/images/me.png" alt="El Amrani Chakir">

        <div class="flex flex-col items-center lg:items-start">
            <span
                class="mt-2 first-letter:capitalize opacity-0 whitespace-nowrap animate-[fadeInUp_.3s_ease-out_.5s_forwards] lg:animate-[fadeInUp_.3s_ease-out_.9s_forwards]">
                {{ $page->trans('hero.greet') }}
            </span>
            <h1
                class="script-font tracking-wide mt-2 text-4xl text-center font-bold capitalize md:text-5xl lg:text-left bg-gradient-to-l from-yellow-600 to-yellow-800 bg-clip-text text-transparent opacity-0 animate-[fadeInUp_.3s_ease-out_.6s_forwards] lg:animate-[fadeInUp_.3s_ease-out_1s_forwards] dark:text-yellow-200">
                {{ $page->trans('hero.fullname') }}
            </h1>
            <h2
                class="script-font mt-2 text-lg text-center font-medium capitalize opacity-0 whitespace-nowrap animate-[fadeInUp_.3s_ease-out_.7s_forwards] lg:text-lef lg:text-2xl lg:animate-[fadeInUp_.3s_ease-out_1.1s_forwards]">
                {{ $page->trans('hero.title') }}
            </h2>
            <p
                class="mt-4 text-base text-center first-letter:capitalize opacity-0 animate-[fadeInUp_.3s_ease-out_.8s_forwards] lg:text-left lg:text-balance lg:animate-[fadeInUp_.3s_ease-out_1.2s_forwards]">
                {{ $page->trans('hero.short') }}
            </p>
            <div
                class="mt-5 flex justify-between gap-5 opacity-0 animate-[fadeInUp_.3s_ease-out_.9s_forwards] md:justify-start lg:animate-[fadeInUp_.3s_ease-out_1.3s_forwards]">
                <x-buttons.primary href="/CHAKIR_EL_AMRANI_EN.pdf" target="_blank">
                    <x-slot:text>
                        {{ $page->trans('hero.resume') }}
                    </x-slot>

                    <svg class="inline h-5 w-5 fill-white mr-1 dark:fill-yellow-900" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512">
                        <path
                            d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V304H176c-35.3 0-64 28.7-64 64V512H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM176 352h32c30.9 0 56 25.1 56 56s-25.1 56-56 56H192v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V448 368c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H192v48h16zm96-80h32c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H304c-8.8 0-16-7.2-16-16V368c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H320v96h16zm80-112c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V432 368z" />
                    </svg>

                </x-buttons.primary>

                <x-buttons.secondary href="#contact-section" text="{{ $page->trans('hero.contact') }}" />
            </div>
        </div>
    </div>
    <!-- Intro End -->

    <!-- Hero Section Footer Start -->
    <div id="hero-section-footer" class="flex justify-between lg:justify-center lg:relative">
        <!-- Social Links Start -->
        <ul id="hero-section-footer-social-links"
            class="hidden lg:block lg:absolute lg:-left-6 lg:opacity-0 lg:animate-[socialLinksFadeInUp_.7s_ease-out_forwards]"
            style="animation-delay: 1.2s">
            <li>
                <x-vertical-link text="Behance" link="{{ $page->links->behance }}" />
            </li>
            <li>
                <x-vertical-link text="Linkedin" link="{{ $page->links->linkedin }}" />
            </li>
            <li>
                <x-vertical-link text="Github" link="{{ $page->links->github }}" />
            </li>
        </ul>
        <!-- Social Links End -->

        <!-- Dark Mode Switcher Mobile Start -->
        <button id="dark-mode-toggle-btn-mobile"
            class="dark-mode-toggle-btn absolute left-4 -bottom-2 h-12 w-12 rounded-lg p-2 bg-brown-50 opacity-0 animate-[heroControlsFadeInUp_.5s_ease-out_1.1s_forwards] lg:hidden dark:bg-yellow-200">
            <svg class="fill-yellow-800 block dark:hidden" fill="currentColor" viewBox="0 0 20 20">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
            </svg>
            <svg class="fill-yellow-500 hidden dark:block" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    fill-rule="evenodd" clip-rule="evenodd"></path>
            </svg>
        </button>
        <!-- Dark Mode Switcher Mobile End -->

        <!-- Scroll Down Icon Indicator Start -->
        <button type="button" id="hero-section-footer-scroll-down-indicator" class="cursor-default hidden lg:block">
            <svg class="h-8 w-8 fill-brown-50 lg:-translate-y-1/4 lg:opacity-0 lg:animate-[fadeIn_1s_ease-out_1.6s_forwards] drop-shadow-sm dark:fill-dark"
                width="26" height="40" viewBox="0 0 26 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="stroke-2 stroke-yellow-950 dark:stroke-yellow-200"
                    d="M15.8298 38.5007H10.2928C5.32281 38.5007 1.25781 34.4357 1.25781 29.4667V10.3797C1.25781 5.4107 5.32381 1.3457 10.2928 1.3457H15.8288C20.7988 1.3457 24.8638 5.4107 24.8638 10.3797V29.4667C24.8638 34.4357 20.7978 38.5007 15.8288 38.5007H15.8298Z" />
                <path
                    class="stroke-2 stroke-yellow-950 dark:stroke-yellow-200 lg:animate-[mouseScrollDown_2s_linear_infinite]"
                    d="M13.1448 31.1548H12.9768C12.4388 31.1535 11.9232 30.9392 11.5428 30.5587C11.1624 30.1783 10.9481 29.6628 10.9468 29.1248V23.0798C10.9468 21.9638 11.8608 21.0508 12.9768 21.0508H13.1448C14.2608 21.0508 15.1748 21.9638 15.1748 23.0808V29.1268C15.1748 30.2428 14.2608 31.1568 13.1448 31.1568V31.1548Z" />
            </svg>
        </button>
        <!-- Scroll Down Icon Indicator End -->

        <!-- Language Switcher Start -->
        <ul id="hero-section-footer-lang-switcher"
            class="flex flex-col absolute script-font border-2 border-yellow-800 hover:border-yellow-800 rounded shadow-sm right-4 -bottom-2 opacity-0 animate-[heroControlsFadeInUp_.5s_ease-out_forwards] animation-delay-[1.1s] lg:absolute lg:bottom-8 lg:right-0 lg:animation-delay-[1.2s] lg:animation-duration-[.7s] dark:border-yellow-200">
            <li>
                <a href="/en"
                    class="lang-switcher-btn {{ $page->getPath() ? $page->selected('en') : 'selected' }}">EN</a>
            </li>
            <li>
                <a href="/fr" class="lang-switcher-btn cursor-pointer {{ $page->selected('fr') }}">FR</a>
            </li>
        </ul>
        <!-- Language Switcher End -->
    </div>
    <!-- Hero Section Footer End -->

    <!-- Animated Background SVGs Start -->
    <div id="heroBackgroundSvgContainer" class="absolute h-full w-full -z-50">
        <!-- Mobile SVGs Fallback for no JS -->
        <x-svg.star classes="top-[20%] left-[20%] animation-delay-[.2s] md:hidden" />
        <x-svg.star classes="top-[15%] left-[75%] animation-delay-[.3s] md:hidden" />
        <x-svg.star classes="top-[25%] left-[85%] animation-delay-[.4s] md:hidden" />
        <x-svg.star classes="top-[12%] left-[9%] animation-delay-[.8s] md:hidden" />
        <x-svg.star classes="top-[30%] left-[8%] animation-delay-[1s] md:hidden" />

        <x-svg.star classes="top-[83%] left-[20%] animation-delay-[.2s] md:hidden" />
        <x-svg.star classes="top-[85%] left-[75%] animation-delay-[.8s] md:hidden" />
        <x-svg.star classes="top-[88%] left-[85%] animation-delay-[1.2s] md:hidden" />
        <x-svg.star classes="top-[90%] left-[5%] animation-delay-[1s] md:hidden" />

        <!-- Desktop SVGs Fallback for no JS -->
        <x-svg.star classes="md:top-[24%] md:left-[16%] md:animation-delay-[.2s]" />
        <x-svg.star classes="md:top-[20%] md:left-[32%] md:animation-delay-[.4s]" />
        <x-svg.star classes="md:top-[45%] md:left-[38%] md:animation-delay-[.6s]" />
        <x-svg.star classes="md:top-[25%] md:left-[55%] md:animation-delay-[.8s]" />
        <x-svg.star classes="md:top-[40%] md:left-[70%] md:animation-delay-[1s]" />
        <x-svg.star classes="md:top-[22%] md:left-[77%] md:animation-delay-[1.2s]" />

        <x-svg.star classes="md:top-[72%] md:left-[15%] md:animation-delay-[1.4s]" />
        <x-svg.star classes="md:top-[83%] md:left-[25%] md:animation-delay-[1.4s]" />
        <x-svg.star classes="md:top-[75%] md:left-[45%] md:animation-delay-[1.6s]" />
        <x-svg.star classes="md:top-[67%] md:left-[65%] md:animation-delay-[1.8s]" />
        <x-svg.star classes="md:top-[74%] md:left-[82%] md:animation-delay-[2s]" />
    </div>
    <!-- Animated Background SVGs End -->
</div>
