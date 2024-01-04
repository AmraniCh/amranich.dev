<div class="flex flex-col justify-between h-[92vh] px-4 lg:px-16 mb-6 relative">

    <!-- Top Bar Start -->
    <div class="flex justify-between items-center flex-wrap">
        <div class="grow-2">
            <a href="/">
                <img class="w-16 lg:w-24 mb-4 select-none" src="/assets/images/logo.svg" alt="El Amrani Chakir">
            </a>
        </div>

        <button type="button" class="lg:hidden float-right" id="navbar-collapse-toggle-btn">
            <svg class="w-8 h-8 fill-brown-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>

        <ul id="navbar-default"
            class="hidden absolute top-[10%] left-[50%] translate-x-[-50%] lg:flex flex-col gap-2 grow-1 bg-yellow-300 rounded p-4 w-[92%] lg:translate-x-0 lg:flex-grow-1 lg:gap-14 lg:justify-center lg:flex-row lg:sticky lg:bg-transparent lg:w-auto">
            <li>
                <a href="#home" class="hero-nav-item line-before-static">
                    {{ $page->trans('nav.home') }}
                </a>
            </li>
            <li>
                <a href="#projects" class="hero-nav-item line-before line-before-hover">
                    {{ $page->trans('nav.projects') }}
                </a>
            </li>
            <li>
                <a href="#services" class="hero-nav-item line-before line-before-hover">
                    {{ $page->trans('nav.services') }}
                </a>
            </li>
            <li>
                <a href="#blog" class="hero-nav-item line-before line-before-hover">
                    {{ $page->trans('nav.blog') }}
                </a>
            </li>
            <li>
                <a href="#contact" class="hero-nav-item line-before line-before-hover">
                    {{ $page->trans('nav.contact') }}
                </a>
            </li>
        </ul>
    </div>
    <!-- Top Bar End -->

    <!-- Intro Start -->
    <div class="flex items-center flex-col lg:mb-16 lg:flex-row lg:justify-between md:px-16 xl:gap-5 xl:px-32">
        <img class="rounded-full mb-2 w-40 select-none lg:w-[800px] xl:w-[1000px]" src="/assets/images/me.png"
            alt="El Amrani Chakir">

        <div class="flex flex-col items-center lg:items-start">
            <span class="mt-2 first-letter:capitalize">
                {{ $page->trans('hero.greet') }}
            </span>
            <h1 class="mt-2 text-5xl text-center font-bold capitalize lg:text-left">
                {{ $page->trans('hero.fullname') }}
            </h1>
            <h2 class="mt-2 text-lg text-center font-medium capitalize lg:text-left">
                {{ $page->trans('hero.title') }}
            </h2>
            <p class="mt-4  text-base text-center capitalize lg:text-justify">
                {{ $page->trans('hero.short') }}
            </p>
            <div class="mt-5 flex justify-between gap-5 md:justify-start">
                <x-buttons.primary>
                    <x-slot:text>
                        {{ $page->trans('hero.resume') }}
                    </x-slot>

                    <svg class="h-4 w-4 fill-white mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V304H176c-35.3 0-64 28.7-64 64V512H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM176 352h32c30.9 0 56 25.1 56 56s-25.1 56-56 56H192v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V448 368c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H192v48h16zm96-80h32c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H304c-8.8 0-16-7.2-16-16V368c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H320v96h16zm80-112c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V432 368z" />
                    </svg>

                </x-buttons.primary>

                <x-buttons.secondary text="{{ $page->trans('hero.contact') }}" />
            </div>
        </div>

    </div>
    <!-- Intro End -->

    <!-- Top Section Footer Start -->
    <div id="top-section-footer" class="flex justify-between -mb-5 lg:mb-1 lg:justify-center lg:relative">
        <!-- Social Links Start -->
        <ul id="top-section-footer-social-links" class="hidden lg:block lg:absolute lg:bottom-20 lg:-left-6">
            <li>
                <a href="{{ $page->links->behance }}" target="blank"
                    class="block text-brown-400 text-center font-normal cursor-pointer -rotate-90 tracking-widest-x2 uppercase mb-28 hover:opacity-70">
                    Behance
                </a>

            </li>
            <li>
                <a href="{{ $page->links->linkedin }}" target="blank"
                    class="block text-brown-400 text-center font-normal cursor-pointer -rotate-90 tracking-widest-x2 uppercase mb-28 hover:opacity-70">
                    Linkedin
                </a>

            </li>
            <li>
                <a href="{{ $page->links->github }}" target="blank"
                    class="block text-brown-400 text-center font-normal cursor-pointer -rotate-90 tracking-widest-x2 uppercase hover:opacity-70">
                    Github
                </a>
            </li>
        </ul>
        <!-- Social Links End -->

        <!-- Dark Mode Switcher Start -->
        <button type="button" id="top-section-footer-dark-mode-toggle-btn"
            class="absolute left-4 -bottom-2 lg:bottom-[initial] lg:left-[initial] lg:fixed lg:top-[5.4rem] lg:right-[80px]">
            <svg style="color: rgb(223, 211, 201);" width="32" height="32" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8V16Z" fill="#dfd3c1"></path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM12 4V8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16V20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4Z"
                    fill="#dfd3c1"></path>
            </svg>
        </button>
        <!-- Dark Mode Switcher End -->

        <!-- Scroll Down Icon Indicator Start -->
        <button type="button" id="top-section-footer-scroll-down-indicator"
            class="cursor-default hidden -mb-3 lg:mb-2 lg:block">
            <svg class="h-8 w-8 animate-bounce fill-brown-400" width="26" height="40" viewBox="0 0 26 40"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15.8298 38.5007H10.2928C5.32281 38.5007 1.25781 34.4357 1.25781 29.4667V10.3797C1.25781 5.4107 5.32381 1.3457 10.2928 1.3457H15.8288C20.7988 1.3457 24.8638 5.4107 24.8638 10.3797V29.4667C24.8638 34.4357 20.7978 38.5007 15.8288 38.5007H15.8298Z"
                    stroke="#444444" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M13.1448 31.1548H12.9768C12.4388 31.1535 11.9232 30.9392 11.5428 30.5587C11.1624 30.1783 10.9481 29.6628 10.9468 29.1248V23.0798C10.9468 21.9638 11.8608 21.0508 12.9768 21.0508H13.1448C14.2608 21.0508 15.1748 21.9638 15.1748 23.0808V29.1268C15.1748 30.2428 14.2608 31.1568 13.1448 31.1568V31.1548Z"
                    stroke="#444444" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
        <!-- Scroll Down Icon Indicator End -->

        <!-- Language Switcher Start -->
        <ul id="top-section-footer-lang-switcher-container"
            class="flex flex-col absolute right-4 -bottom-2 lg:absolute lg:bottom-12 lg:right-0">
            <li>
                <a href="/en" class="lang-switcher-btn  {{ $page->selected('en') }}" data-default="true">EN</a>
            </li>
            <li>
                <a href="/fr" class="lang-switcher-btn cursor-pointer  {{ $page->selected('fr') }}">FR</a>
            </li>
        </ul>
        <!-- Language Switcher End -->
    </div>
    <!-- Top Section Footer End -->

    <!-- Animated Background SVGs Start -->
    <div id="svgs-container" class="absolute h-full w-full -z-50">
    </div>
    <!-- Animated Background SVGs End -->

    {{-- <svg class="absolute -top-8 -right-8 -z-50 opacity-30 w-2/5 blur-[2px] dark:opacity-5" version="1.2"
        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1500 1000">
        <title>5096611-ai</title>
        <style>
            tspan {
                white-space: pre
            }

            .s0 {
                fill: #30568a
            }

            .s1 {
                fill: #eeb76e
            }

            .s2 {
                fill: #e36e51
            }

            .s3 {
                fill: #53b2cf
            }
        </style>
        <g id="OBJECTS">
            <g id="&lt;Group&gt;">
                <g id="&lt;Clip Group&gt;">
                    <filter id="f0">
                        <feFlood flood-color="#e4e4e4" flood-opacity="1" />
                        <feBlend mode="normal" in2="SourceGraphic" />
                        <feComposite in2="SourceAlpha" operator="in" />
                    </filter>
                    <g id="&lt;Group&gt;" filter="url(#f0)">
                        <g id="&lt;Group&gt;">
                            <path id="&lt;Path&gt;" class="s0" d="m1341.5 160l-0.3-0.2 0.4-0.2 0.2 0.4z" />
                            <path id="&lt;Path&gt;" class="s1" d="m1356.3 143.4l-9.6 4-3.9-9.6 13.5-13.6z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1356.3 169.9l-0.3-0.2-0.2-0.3h0.5z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1331.7 135.6l-7.3 7.3-7.3-7.3 7.3-17.7z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1292.5-337.9l25.3 25.3-10.5 10.4h-14.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1338 151l-3.9 1.6-3.1-3 4.6-4.6z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1310.7 151l2.5-6 4.5 4.6-3 3z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1324.7 156.5l-0.3 0.1-0.3-0.1 0.3-0.3z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1356.3 110.9l-17.4 17.5-9.5-22.7 26.9-64.9z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1292.5-234.3l5.4 5.4h-5.4z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1317.8-209l-25.3 25.2v-35.7h14.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1292.5-292.8h5.4l-5.4 5.5z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1292.5-71.2l31.9-14.9 31.9 14.9v87.4l-31.9 77.2-31.9-77z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1292.5 40.9l26.8 64.8-9.4 22.7-17.4-17.4z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1292.5 169.4h0.4l-0.1 0.3-0.3 0.1z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1292.5 153.6l5.9 2.4-1.6 4h-4.3z" />
                            <path id="&lt;Path&gt;" class="s1" d="m1292.5 124.3l13.5 13.5-4 9.6-9.5-4z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1307.1 159.6l0.4 0.2-0.2 0.2h-0.4z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1356.3 160h-4.3l-1.7-4 6-2.5z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1324 246.2l0.4-0.1 0.3 0.1-0.3 0.3z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1341.5 242.7h0.3l-0.1 0.4-0.4-0.2z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1324.4 284.8l-7.4-17.7 7.4-7.3 7.3 7.3z" />
                            <path id="&lt;Path&gt;" class="s1" d="m1356.3 278.5l-13.5-13.6 3.9-9.6 9.6 4z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1356.3 362l-26.9-64.9 9.5-22.8 17.4 17.5z" />
                            <path id="&lt;Path&gt;" class="s3"
                                d="m1283.1-77.1v70.9l-27.1-65.4-45.5-2-30.8 33.6 1.1 2.8 25.9 62.4-49.9-49.9-31.6 11.5 11.5-31.7-39.4-39.4h55.8l17.6-37.7 33.9-13.9 39.1 14.2 39.4-39.4v55.8l30.2 14.1z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1356.3 249.1l-6-2.4 1.7-4h4.3z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1356.3 232.8v0.5h-0.4l0.1-0.3z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1356.3 473.6l-31.9 14.9-31.9-14.9v-87.2l31.9-77 31.9 77.1z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1208.1-144.6l-12-33.1 41.8-41.8h45.2v45.1l-41.9 41.9z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1310.7 251.7l4-1.6 3 3-4.6 4.6z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1365.7 149.6l17.7-7.3-7.3 17.7h-10.4z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1292.5 232.8l0.2 0.1 0.1 0.4h-0.3z" />
                            <path id="&lt;Path&gt;" class="s1" d="m1292.5 259.3l9.5-4 4 9.6-13.5 13.5z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1338.1 251.7l-2.5 6-4.6-4.6 3.1-3z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1292.5 195l4.8-11.8 9-8.9 11.7-4.9h12.7l11.7 4.9 9 8.9 4.9 11.9v12.6l-4.8 11.7-9 9-11.8 4.9h-12.7l-11.7-4.9-9-9-4.8-11.6z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1292.5 291.7l17.3-17.4 9.5 22.8-26.8 64.7z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1307.2 242.7l0.3 0.2-0.4 0.2-0.2-0.4z" />
                            <path id="&lt;Path&gt;" class="s1" d="m1401.5 169.4l-13.6 13.5-9.5-3.9 3.9-9.6z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1494.5-13.9l33.1 12 12 33.2-61.8 61.8-77.1 31.9 32-77.1z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1460.5 110.4l-49.6 49.6h-24.7l9.5-22.8z" />
                            <path id="&lt;Path&gt;" class="s2"
                                d="m1589.8 311.3l-26 23.8-80.7-33.4-59-59h83.5l80.7 33.4z" />
                            <path id="&lt;Path&gt;" class="s2"
                                d="m1589.9 91.4l-1.6 35.2-80.7 33.4h-83.5l59-59 80.8-33.4z" />
                            <path id="&lt;Path&gt;" class="s1" d="m1378.3 223.7l9.6-4 13.5 13.6h-19.1z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1395.6 265.4l-9.4-22.7h24.6l49.6 49.6z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1373.1 211.1l3.1-3.1 4.5 4.6-6 2.4z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1414.7 233.3l-17.4-17.4 22.8-9.5 64.8 26.9z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1380.7 190.1l-4.5 4.6-3.1-3 1.7-4z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1365.7 183.9l0.4 0.2-0.2 0.4-0.2-0.2z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1292.5-351.2v-59.2l31.9-14.9 31.9 14.9v59.2l-31.9 31.9z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1365.7 218.4l0.2-0.2 0.2 0.4-0.4 0.2z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1365.7 169.4h6.5l-2.5 6-4-1.7z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1365.7 263.2l22.7 9.4 26.9 64.8-49.6-49.5z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1365.7 228.9l4-1.6 2.4 6h-6.4z" />
                            <path id="&lt;Path&gt;" class="s2"
                                d="m1434.3 466.8l-35.2-1.6-33.4-80.5v-83.6l59 59 33.4 80.7z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1365.7 242.7h10.3l7.3 17.6-17.6-7.3z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1369.2 201.1l0.3 0.2-0.3 0.4-0.1-0.3z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1356.3-234.3v5.4h-5.4z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1341.5-219.5h14.8v35.7l-25.3-25.2z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1320.6-219.5h7.6l-3.8 3.8z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1292.5-111.3v-59.2l31.9-31.9 31.9 31.9v59.2l-31.9 14.9z" />
                            <path id="&lt;Path&gt;" class="s3"
                                d="m1365.7-161.1l39.4 39.4 39.1-14.2 33.8 14 17.6 37.7h55.7l-39.4 39.4 11.4 31.4-31.2-11.4-50 50 27-65.3-30.8-33.6-45.5 2-27.1 65.3v-70.7l-30.2-14.1 30.2-14.1z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1331-312.6l25.3-25.3v35.7h-14.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1328.2-302.2h-7.6l3.8-3.8z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1382.8 201.4l7.3-7.4 17.7 7.3-17.7 7.4z" />
                            <path id="&lt;Path&gt;" class="s3"
                                d="m1311.2-228.9l-18.7-18.7v-26.5l18.7-18.7h26.4l18.7 18.7v26.5l-18.7 18.7z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1356.3-292.8v5.5l-5.4-5.5z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1432.6 354.8l-31.9-77.1 77.1 31.9 61.8 61.8-12 32.8-0.2 0.1-0.1 0.3-32.9 12z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1596.8 233.3h-87.4l-77.1-32 77.1-31.9h87.4l14.8 31.7v0.1l0.1 0.2z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1609.7 531.7l-3.8-3.8 3.8-3.9z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1484.9 169.4l-64.8 26.9-22.8-9.5 17.4-17.4z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1534.7 411.9l0.2-0.1 0.1-0.3 32.9-11.9 41.8 41.8v45.2h-45.1l-41.9-41.9z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1574 495.9h35.7v14.9l-10.5 10.4z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1501.5 559.8l-14.9-31.9 14.9-32h59.2l31.9 32-31.9 31.9z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1609.7 559.8h-35.7l25.2-25.3 10.5 10.5z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1292.5 242.7h4.2l1.7 4-5.9 2.4z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m965.6-216v-59.1l32-14.9 31.9 14.9v59.1l-31.9 32z" />
                            <path id="&lt;Path&gt;" class="s2" d="m990.9-73.8l-25.3 25.3v-35.8h14.8z" />
                            <path id="&lt;Path&gt;" class="s3"
                                d="m1038.9-25.9l39.4 39.5 31.5-11.5-11.5 31.6 2.1 2.2 47.8 47.8-65.2-27-33.6 30.8 2 45.5 65.2 27h-70.5l-14.2 30.3-14.2-30.4h-55.7l39.4-39.4-14.2-39.1 14-33.9 37.7-17.6z" />
                            <path id="&lt;Path&gt;" class="s2" d="m965.6-202.7l25.3 25.3-10.5 10.5h-14.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m965.6-157.5h5.5l-5.5 5.4z" />
                            <path id="&lt;Path&gt;" class="s2" d="m903.5 218.3l10.5-10.5 25.3 25.3h-35.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m903.5 197.4l3.9 3.8-3.9 3.8z" />
                            <path id="&lt;Path&gt;" class="s2" d="m903.5 169.3h35.8l-25.3 25.3-10.5-10.5z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m903.5 114.7l41.9-41.8 33.1 12 12 33.1-41.8 41.9h-45.2z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m965.6 23.9v-59.1l32-32 31.9 32v59.1l-31.9 14.9z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1029.5-99.1v5.4h-5.4z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1014.7-84.3h14.8v35.8l-25.3-25.3z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m952.6 169.3h59.2l14.9 31.9-14.9 31.9h-59.2l-31.9-31.9z" />
                            <path id="&lt;Path&gt;" class="s0" d="m993.7-84.3h7.7l-3.8 3.9z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1001.4-166.9h-7.7l3.9-3.9z" />
                            <path id="&lt;Path&gt;" class="s3"
                                d="m984.3-93.7l-18.7-18.7v-26.4l18.7-18.7h26.5l18.7 18.7v26.4l-18.7 18.7z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1004.2-177.4l25.3-25.3v35.8h-14.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1029.5-157.5v5.4l-5.4-5.4z" />
                            <path id="&lt;Path&gt;" class="s0" d="m965.6-99.1l5.5 5.4h-5.5z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m939.1-125.6l-31.9 31.9h-59.2l-14.9-31.9 14.9-31.9h59.2z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1838.2 194.6l-10.5-10.5v-14.8h35.8z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1902.7 84.9l12 33.1-41.8 41.9h-45.2v-45.2l41.8-41.8z" />
                            <path id="&lt;Path&gt;" class="s2" d="m920.5-157.5h35.7v14.8l-10.4 10.5z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m869.2-208.8l12.1-33.1 33.1-12 41.8 41.8v45.2h-45.1z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1914.7 284.3l-12 33.2-33.2 12-41.8-41.8v-45.2h45.2z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1844.8 201.2l31.9-31.9h59.2l14.9 31.9-14.9 31.9h-59.1z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1863.5 233.1h-35.8v-14.8l10.5-10.5z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1827.7 205v-7.6l3.8 3.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m894.1 174.7l-5.4-5.4h5.4z" />
                            <path id="&lt;Path&gt;" class="s2" d="m868.9 149.4l25.2-25.3v35.8h-14.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m894.1 233.1h-5.4l5.4-5.4z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m978.5 317.5l-33.1 12-41.9-41.8v-45.2h45.2l41.8 41.8z" />
                            <path id="&lt;Path&gt;" class="s2" d="m894.1 278.3l-25.2-25.3 10.4-10.5h14.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m956.2-129.4v7.6l-3.8-3.8z" />
                            <path id="&lt;Path&gt;" class="s2"
                                d="m979.5 75.3l-36.5-13.3-39.5 39.4v-55.7l-35.2-16.5 11.9-28.9 36.6 13.3 39.4-39.5v55.8l35.3 16.5z" />
                            <path id="&lt;Path&gt;" class="s2" d="m945.8-119l10.4 10.5v14.8h-35.7z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m881.3-9.3l-12.1-33.2 41.9-41.8h45.1v45.2l-41.8 41.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1283.1 287.8l-49.6 49.6 26.8-64.8 22.8-9.4z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1121.3 404.4l-12.1-33.1 61.7-61.7 77.1-31.9-31.9 77.1-61.7 61.7z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1283.1 233.3h-6.5l2.5-6 4 1.7z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1283.1 253l-17.7 7.3 7.3-17.6h10.4z" />
                            <path id="&lt;Path&gt;" class="s2"
                                d="m1283.1 384.5l-33.4 80.6-35.2 1.6-23.8-26 33.4-80.6 59-59z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1272.6-254.2l10.5 10.5v14.8h-35.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1283.1 173.7l-4.1 1.7-2.4-6h6.5z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1279.5 201.7l-0.3-0.4 0.3-0.2 0.1 0.3z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1038.9-129.4l3.8 3.8-3.8 3.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1283.1 218.8l-0.4-0.2 0.1-0.4 0.3 0.3z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1037.1 201.3l14.9-31.9h87.3l77.1 31.9-77.1 32h-87.3z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1196.1-344l12-33.1 33.1-12.1 41.9 41.9v45.1h-45.2z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1266-260.8l-32 31.9h-59.1l-14.9-31.9 14.9-32h59.1z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1247.3-292.8h35.8v14.8l-10.5 10.5z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1283.1-264.7v7.7l-3.9-3.8z" />
                            <path id="&lt;Path&gt;" class="s2"
                                d="m1059 311.2l1.6-35.2 80.6-33.3h83.4l-59 59-80.6 33.4z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1283.1 160h-10.4l-7.4-17.7 17.8 7.4z" />
                            <path id="&lt;Path&gt;" class="s2"
                                d="m1224.6-219.5l-39.4 39.4 13.3 36.6-29 11.9-16.4-35.3h-55.8l39.4-39.5-13.3-36.5 29-11.9 16.5 35.3z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1084-166.9h-45.1v-45.2l41.8-41.8 33.1 12 12.1 33.1z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1283.1 184.2l-0.3 0.3-0.2-0.4 0.5-0.2z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1216.1 47.9l31.9 77.1-77.1-31.9-61.7-61.8 12-33.1 33.2-12z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1283.1 139.5l-22.8-9.4-26.9-64.9 49.7 49.7z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1113.8-9.3l-33.1 12-41.8-41.8v-45.2h45.1l41.9 41.8z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1258.6 208.7l-17.7-7.4 17.7-7.3 7.3 7.3z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1188.3 110.4l64.8 26.8 9.4 22.8h-24.6z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1074.7-93.7h-35.8v-14.8l10.5-10.5z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1038.9-157.5h35.8l-25.3 25.3-10.5-10.5z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1147.1-157.5l14.9 31.9-14.9 31.9h-59.2l-31.9-31.9 31.9-31.9z" />
                            <path id="&lt;Path&gt;" class="s1" d="m1270.4 179l-9.6 3.9-13.5-13.5h19.1z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1234 169.4l17.4 17.4-22.7 9.5-64.9-26.9z" />
                            <path id="&lt;Path&gt;" class="s2"
                                d="m1060.5 126.6l-1.5-35.2 26-23.8 80.6 33.4 59 59h-83.4z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1228.7 206.4l22.7 9.4-17.4 17.5h-70.2z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1275.6 191.7l-3 3-4.6-4.6 6-2.4z" />
                            <path id="&lt;Path&gt;" class="s2"
                                d="m1214.4-64.1l35.2 1.6 33.5 80.8v83.3l-59.1-59-33.4-80.7z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1188.3 292.3l49.6-49.6h24.7l-9.5 22.7z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1274 215l-6-2.4 4.6-4.6 3 3.1z" />
                            <path id="&lt;Path&gt;" class="s1" d="m1247.3 233.3l13.5-13.6 9.6 4-4 9.6z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1292.5 695.3v-5.5l5.4 5.5z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1283.1 695.3h-35.8l25.3-25.3 10.5 10.4z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1283.1 667.2l-3.9-3.9 3.9-3.8z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1196.1 580.2l12-33.1 33.1-12.1 41.9 41.8v45.2h-45.2z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1147.1 559.9h-59.1l-32-31.9 32-32h59.1l14.9 32z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1283.1 631.4v14.8l-10.5 10.5-25.3-25.3z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1683 378.3v59.2l-32 31.9-31.9-31.9v-59.2l31.9-14.9z" />
                            <path id="&lt;Path&gt;" class="s3"
                                d="m1283.1 563.6l-39.4-39.5-39.1 14.3-33.9-14.1-17.6-37.6h-55.7l39.4-39.5-11.4-31.3 31.4 11.4 49.9-49.9-27 65.2 30.8 33.6 45.6-2 1.1-2.7 25.9-62.5v70.6l30.2 14.1-30.2 14.1z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1292.5 636.8v-5.4h5.4z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1356.3 513.8v59.2l-31.9 31.9-31.9-31.9v-59.2l31.9-14.9z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1074.7 559.9h-35.8v-14.8l10.5-10.5z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1283.1 704.6v45.2l-41.9 41.8-33.1-12-12-33.1 41.8-41.9z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1328.2 622h-7.6l3.8-3.8z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1049.4 521.3l-10.5-10.4v-14.9h35.8z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1113.9 411.7l12 33.1-41.8 41.9h-45.2v-45.2l41.9-41.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1038.9 531.8v-7.7l3.9 3.9z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1125.9 611.1l-12 33.2-33.1 12-41.9-41.8v-45.2h45.2z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1234 631.4l32 31.9-32 32h-59.1l-14.9-32 14.9-31.9z" />
                            <path id="&lt;Path&gt;" class="s2"
                                d="m1097.4 569.3h55.7l16.5-35.3 28.9 12-13.3 36.6 39.4 39.4h-55.7l-16.5 35.3-28.9-12 13.3-36.6z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1376.2 656.7l-10.5-10.5v-14.8h35.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1365.7 667.2v-7.7l3.9 3.8z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1452.7 746.5l-12 33.1-33.1 12-41.9-41.8v-45.2h45.2z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1440.7 547.1l12 33.1-41.8 41.8h-45.2v-45.2l41.9-41.8z" />
                            <path id="&lt;Path&gt;" class="s3"
                                d="m987.2 321l14.2-39.1-39.4-39.4h55.7l14.2-30.3 14.2 30.5h70.5l-65.2 27-2 45.5 33.7 30.8 2.7-1.1 62.5-25.9-49.9 49.9 11.4 31.3-31.5-11.4-39.4 39.4v-55.7l-37.7-17.6z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1401.5 695.3h-35.8v-14.9l10.5-10.4z" />
                            <path id="&lt;Path&gt;" class="s3"
                                d="m1609.7 428.1l-39.4-39.4-31.1 11.3 11.2-31-50-50 65.4 27.1 33.6-30.8-2-45.6-2.8-1.1-62.5-25.9h70.7l14.1-30.2 14 30h55.7l-39.4 39.4 14.2 39.1-14 33.8-37.7 17.6z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1564.6 569.2h45.1v45.2l-41.8 41.8-33.1-12.1-12.1-33.1z" />
                            <path id="&lt;Path&gt;" class="s2"
                                d="m1424.2 622l39.4-39.4-13.3-36.6 28.8-12.1 16.4 35.3h55.8l-39.4 39.4 13.3 36.6-28.8 12.1-16.5-35.3z" />
                            <path id="&lt;Path&gt;" class="s3"
                                d="m1337.6 631.4l18.7 18.7v26.5l-18.7 18.7h-26.4l-18.7-18.7v-26.5l18.7-18.7z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1382.8 663.3l32-31.9h59.1l14.9 31.9-14.9 32h-59.1z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1320.6 704.6h7.6l-3.8 3.9z" />
                            <path id="&lt;Path&gt;" class="s3"
                                d="m1365.7 479.6v-70.4l27 65.2 45.6 2 30.8-33.7-1.2-2.7-25.9-62.6 50 50 31.2-11.3-11.3 31 39.4 39.5h-55.8l-17.6 37.6-33.7 14.2-39.1-14.3-39.4 39.5v-55.8l-30.2-14.1z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1356.3 753.7v59.2l-31.9 14.9-31.9-14.9v-59.2l31.9-31.9z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1317.8 715.1l-25.3 25.3v-35.8h14.8z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1356.3 740.4l-25.3-25.3 10.5-10.5h14.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1356.3 695.3h-5.4l5.4-5.5z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1331 611.5l25.3-25.3v35.8h-14.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1356.3 636.8l-5.4-5.4h5.4z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1307.3 622h-14.8v-35.8l25.3 25.3z" />
                            <path id="&lt;Path&gt;" class="s0" d="m866.1 159.9h-7.7l3.8-3.9z" />
                            <path id="&lt;Path&gt;" class="s0" d="m830.3 233.1v-5.4l5.4 5.4z" />
                            <path id="&lt;Path&gt;" class="s3"
                                d="m875.4 169.3l18.7 18.7v26.4l-18.7 18.7h-26.4l-18.7-18.7v-26.4l18.7-18.7z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1365.7 114.8l49.6-49.6-26.8 64.9-22.8 9.4z" />
                            <path id="&lt;Path&gt;" class="s2" d="m845.1 159.9h-14.8v-35.8l25.3 25.3z" />
                            <path id="&lt;Path&gt;" class="s2" d="m855.6 253l-25.3 25.3v-35.8h14.8z" />
                            <path id="&lt;Path&gt;" class="s2"
                                d="m903.5 300.9l39.5 39.5 36.5-13.3 12 28.9-35.2 16.5v55.7l-39.4-39.4-36.6 13.3-12-28.9 35.2-16.5z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m894.1 291.6v59.1l-31.9 14.9-31.9-14.9v-59.1l31.9-32z" />
                            <path id="&lt;Path&gt;" class="s0" d="m858.4 242.5h7.7l-3.9 3.9z" />
                            <path id="&lt;Path&gt;" class="s0" d="m830.3 174.7v-5.4h5.4z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m771.9 169.3l31.9 31.9-31.9 31.9h-59.2l-14.9-31.9 14.9-31.9z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m820.9 242.5v45.2l-41.8 41.8-33.2-12-12-33.2 41.8-41.8z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m894.1 51.7v59.1l-31.9 32-31.9-32v-59.1l31.9-14.9z" />
                            <path id="&lt;Path&gt;" class="s2" d="m810.4 207.8l10.5 10.5v14.8h-35.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m820.9 197.4v7.6l-3.8-3.8z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m733.9 118l12-33.1 33.2-12 41.8 41.8v45.2h-45.2z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1004.2 476.2l25.3-25.3v35.8h-14.8z" />
                            <path id="&lt;Path&gt;" class="s2" d="m785.1 169.3h35.8v14.8l-10.5 10.5z" />
                            <path id="&lt;Path&gt;" class="s0" d="m993.8 569.3h7.6l-3.8 3.8z" />
                            <path id="&lt;Path&gt;" class="s2" d="m991 579.8l-25.3 25.3v-35.8h14.8z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m939.2 528l-32 31.9h-59.1l-14.9-31.9 14.9-32h59.1z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1029.5 618.3v59.2l-31.9 14.9-31.9-14.9v-59.2l31.9-31.9z" />
                            <path id="&lt;Path&gt;" class="s0" d="m965.7 559.9v-5.4l5.4 5.4z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1029.5 501.5l-5.4-5.5h5.4z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1029.5 559.9h-5.4l5.4-5.4z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1029.5 605.1l-25.3-25.3 10.5-10.5h14.8z" />
                            <path id="&lt;Path&gt;" class="s3"
                                d="m1010.8 496l18.7 18.8v26.4l-18.7 18.7h-26.4l-18.7-18.7v-26.4l18.7-18.8z" />
                            <path id="&lt;Path&gt;" class="s2" d="m920.5 496h35.8v14.9l-10.5 10.4z" />
                            <path id="&lt;Path&gt;" class="s0" d="m956.3 531.8l-3.9-3.8 3.9-3.9z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1001.4 486.7h-7.6l3.8-3.9z" />
                            <path id="&lt;Path&gt;" class="s2" d="m956.3 559.9h-35.8l25.3-25.3 10.5 10.5z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m956.3 569.3v45.2l-41.9 41.8-33.1-12-12-33.2 41.8-41.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m965.7 501.5v-5.5h5.4z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1029.5 378.4v59.2l-31.9 31.9-31.9-31.9v-59.2l31.9-14.9z" />
                            <path id="&lt;Path&gt;" class="s2" d="m980.5 486.7h-14.8v-35.8l25.3 25.3z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m914.4 399.7l41.9 41.8v45.2h-45.2l-41.8-41.9 12-33.1z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1619.2-99l5.4 5.4h-5.4z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1619.2-157.4h5.4l-5.4 5.4z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1619.2-202.6l25.2 25.3-10.4 10.5h-14.8z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1619.2-215.9v-59.1l31.9-14.9 31.9 14.9v59.1l-31.9 32z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1644.4-73.7l-25.2 25.3v-35.8h14.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1745.1 205l-3.9-3.8 3.9-3.8z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1658.1 118l12-33.1 33.1-12 41.9 41.8v45.2h-45.2z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1745.1 287.7l-41.9 41.8-33.1-12-12-33.2 41.8-41.8h45.2z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1654.9-166.8h-7.7l3.9-3.9z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1745.1 233.1h-35.8l25.3-25.3 10.5 10.5z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1619.2 24v-59.1l31.9-32 31.9 32v59.1l-31.9 14.9z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1668.2-84.2h14.8v35.8l-25.3-25.3z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1683-99v5.4h-5.4z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1692.4-166.8v-45.2l41.8-41.8 33.2 12 12 33.1-41.8 41.9z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1683-157.4v5.4l-5.4-5.4z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1657.7-177.3l25.3-25.3v35.8h-14.8z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1633.9 486.6h-14.8v-35.8l25.3 25.3z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1647.2-84.2h7.7l-3.8 3.9z" />
                            <path id="&lt;Path&gt;" class="s3"
                                d="m1661.4 81.4l-14.2 39.1 39.4 39.4h-55.7l-14.1 30.1-14-30h-70.7l65.3-27 2-45.6-33.6-30.8-65.3 27.1 50-50-11.4-31.4 31.2 11.4 39.5-39.5v55.8l37.6 17.6z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1452.7-177.7l-12 33.1-33.1 12.1-41.9-41.9v-45.1h45.2z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1745.1 184.1l-10.5 10.5-25.3-25.3h35.8z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1365.7-228.9v-14.8l10.5-10.5 25.3 25.3z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1365.7-302.2v-45.1l41.9-41.9 33.1 12.1 12 33.1-41.8 41.8z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1365.7-292.8h35.8l-25.3 25.3-10.5-10.5z" />
                            <path id="&lt;Path&gt;" class="s2"
                                d="m1365.7 18.1l33.5-80.7 35.2-1.6 23.8 26-33.5 80.8-59 59z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1414.8-228.9l-32-31.9 32-32h59.1l14.9 32-14.9 31.9z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1501.6-157.4h59.1l32 31.9-32 31.9h-59.1l-14.9-31.9z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1365.7-264.7l3.9 3.9-3.9 3.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1692.4-129.3l3.8 3.8-3.8 3.8z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1599.3-118.9l10.5 10.5v14.8h-35.8z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1534.8-9.2l-12-33.1 41.8-41.9h45.2v45.2l-41.9 41.8z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1636.9 169.3h59.1l32 31.9-32 31.9h-59.1l-14.9-31.7 0.1-0.1-0.1-0.2z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1609.8-129.3v7.6l-3.9-3.8z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1522.8-208.7l12-33.1 33.1-12 41.9 41.8v45.2h-45.2z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1574-157.4h35.8v14.8l-10.5 10.5z" />
                            <path id="&lt;Path&gt;" class="s2"
                                d="m1551.3-166.8h-55.7l-16.5 35.2-28.8-11.9 13.3-36.6-39.4-39.4h55.7l16.5-35.3 28.8 12-13.3 36.6z" />
                            <path id="&lt;Path&gt;" class="s3"
                                d="m1637.9-93.6l-18.7-18.7v-26.4l18.7-18.7h26.4l18.7 18.7v26.4l-18.7 18.7z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1709.5 527.9l31.9-32h59.2l14.9 32-14.9 31.9h-59.2z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1657.7 476.1l25.3-25.3v35.8h-14.8z" />
                            <path id="&lt;Path&gt;" class="s2"
                                d="m1669.1 327.1l36.5 13.3 39.5-39.5v55.8l35.2 16.5-11.9 28.8-36.6-13.3-39.4 39.4v-55.7l-35.3-16.5z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1683 559.8h-5.5l5.5-5.4z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1683 501.4l-5.5-5.5h5.5z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1728.1 559.8h-35.7v-14.8l10.4-10.5z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1702.8 521.2l-10.4-10.4v-14.9h35.7z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1779.4 611l-12.1 33.1-33.1 12.1-41.8-41.8v-45.2h45.1z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1692.4 531.7v-7.7l3.8 3.9z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1767.3 411.6l12.1 33.1-41.9 41.9h-45.1v-45.2l41.8-41.8z" />
                            <path id="&lt;Path&gt;" class="s3"
                                d="m1664.3 495.9l18.7 18.8v26.4l-18.7 18.7h-26.5l-18.7-18.7v-26.4l18.7-18.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1654.9 486.6h-7.7l3.8-3.9z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1619.1 501.4v-5.5h5.4z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1619.1 559.8v-5.4l5.4 5.4z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1644.4 579.7l-25.3 25.3v-35.8h14.8z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1683 618.2v59.2l-32 14.9-31.9-14.9v-59.2l31.9-31.9z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1728.2-93.6h-35.8v-14.8l10.5-10.5z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1647.2 569.2h7.7l-3.9 3.8z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1683 605l-25.3-25.3 10.5-10.5h14.8z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1754.5 110.8v-59.1l31.9-14.9 31.9 14.9v59.1l-31.9 32z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1754.5 291.6l31.9-32 31.9 32v59.1l-31.9 14.9-31.9-14.9z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1790.2 159.9h-7.7l3.9-3.9z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1754.5 169.3h5.4l-5.4 5.4z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1754.5 124.1l25.2 25.3-10.4 10.5h-14.8z" />
                            <path id="&lt;Path&gt;" class="s0"
                                d="m1734.2 2.8l-41.8-41.8v-45.2h45.2l41.8 41.9-12 33.1z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1692.4-157.4h35.8l-25.3 25.3-10.5-10.5z" />
                            <path id="&lt;Path&gt;" class="s1"
                                d="m1709.5-125.5l32-31.9h59.1l14.9 31.9-14.9 31.9h-59.1z" />
                            <path id="&lt;Path&gt;" class="s2"
                                d="m1745.1 101.4l-39.5-39.4-36.5 13.3-12-28.8 35.3-16.5v-55.8l39.4 39.5 36.6-13.3 11.9 28.8-35.2 16.5z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1793 149.4l25.3-25.3v35.8h-14.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1782.5 242.5h7.7l-3.8 3.9z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1803.5 242.5h14.8v35.8l-25.3-25.3z" />
                            <path id="&lt;Path&gt;" class="s2" d="m1779.7 253l-25.2 25.3v-35.8h14.8z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1818.3 227.7v5.4h-5.4z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1754.5 227.7l5.4 5.4h-5.4z" />
                            <path id="&lt;Path&gt;" class="s0" d="m1818.3 169.3v5.4l-5.4-5.4z" />
                            <path id="&lt;Path&gt;" class="s3"
                                d="m1773.2 233.1l-18.7-18.7v-26.4l18.7-18.7h26.4l18.7 18.7v26.4l-18.7 18.7z" />
                        </g>
                    </g>
                </g>
            </g>
        </g>
    </svg> --}}
</div>
