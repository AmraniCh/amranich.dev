@extends('_layouts.main')

@section('body')
    <!-- Top Section Start -->
    <div
        class="container bg-white max-w-7xl m-auto py-4 px-5 dark:bg-[#222] lg:py-8 lg:px-20 rounded-lg drop-shadow-lg h-[3000px]">

        <div class="flex flex-col justify-between h-[92vh] relative">
            <!-- Top Bar Start -->
            <div class="flex justify-between items-center flex-wrap">
                <div class="grow-2">
                    <a href="/">
                        <img class="w-16 lg:w-24 mb-4 select-none" src="/assets/images/logo.svg" alt="El Amrani Chakir">
                    </a>
                </div>

                <button type="button" class="lg:hidden float-right" id="navbar-collapse-toggle-btn">
                    <svg class="w-8 h-8" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

                <ul id="navbar-default"
                    class="hidden flex flex-col grow-1 bg-bone/30 rounded p-4 w-full mb-4 lg:flex lg:justify-between lg:flex-row lg:sticky lg:bg-transparent lg:w-auto lg:mr-12 lg:mb-0">
                    <li>
                        <a href="#home"
                            class="block py-2 px-4 mb-2 rounded capitalize text-white bg-yellow relative dark:lg:text-white before:content-[''] before:block before:w-0 before:h-1 before:rounded before:absolute before:-top-2 before:bg-yellow before:ease-linear before:duration-200 lg:before:active:w-full lg:before:w-full lg:bg-transparent lg:text-inherit lg:p-0 lg:hover:bg-inherit lg:mb-0">
                            {{ $page->trans('nav.home') }}
                        </a>
                    </li>
                    <li>
                        <a href="#projects"
                            class="block py-2 px-4 mb-2 rounded capitalize hover:bg-slate-50 relative dark:lg:text-white before:content-[''] before:block before:w-0 before:h-1 before:rounded before:absolute before:-top-2 before:bg-yellow before:ease-linear before:duration-200 lg:before:active:w-full lg:before:hover:w-full lg:bg-transparent lg:text-inherit lg:p-0 lg:hover:bg-inherit lg:mb-0">
                            {{ $page->trans('nav.projects') }}
                        </a>
                    </li>
                    <li>
                        <a href="#services"
                            class="block py-2 px-4 mb-2 rounded capitalize hover:bg-slate-50 relative dark:lg:text-white before:content-[''] before:block before:w-0 before:h-1 before:rounded before:absolute before:-top-2 before:bg-yellow before:ease-linear before:duration-200 lg:before:active:w-full lg:before:hover:w-full lg:bg-transparent lg:text-inherit lg:p-0 lg:hover:bg-inherit lg:mb-0">
                            {{ $page->trans('nav.services') }}
                        </a>
                    </li>
                    <li>
                        <a href="#blog"
                            class="block py-2 px-4 mb-2 rounded capitalize hover:bg-slate-50 relative dark:lg:text-white before:content-[''] before:block before:w-0 before:h-1 before:rounded before:absolute before:-top-2 before:bg-yellow before:ease-linear before:duration-200 lg:before:active:w-full lg:before:hover:w-full lg:bg-transparent lg:text-inherit lg:p-0 lg:hover:bg-inherit lg:mb-0">
                            {{ $page->trans('nav.blog') }}
                        </a>
                    </li>
                    <li>
                        <a href="#contact"
                            class="block py-2 px-4 rounded capitalize hover:bg-slate-50 relative dark:lg:text-white before:content-[''] before:block before:w-0 before:h-1 before:rounded before:absolute before:-top-2 before:bg-yellow before:ease-linear before:duration-200 lg:before:active:w-full lg:before:hover:w-full lg:bg-transparent lg:text-inherit lg:p-0 lg:hover:bg-inherit lg:mb-0">
                            {{ $page->trans('nav.contact') }}
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Top Bar End -->

            <!-- Hero Start -->
            <div class="flex items-center flex-col lg:mb-16 lg:flex-row lg:justify-between md:px-16 xl:gap-5 xl:px-32">
                <img class="rounded-full mb-2 w-40 select-none lg:w-[800px] xl:w-[1000px]" src="/assets/images/me.png"
                    alt="El Amrani Chakir">

                <div class="flex flex-col items-center lg:items-start">
                    <span class="mt-2 dark:text-white">{{ $page->trans('hero.greet') }}</span>
                    <h1 class="mt-2 text-4xl text-center font-medium capitalize dark:text-white">
                        {{ $page->trans('hero.fullname') }}</h1>
                    <h2 class="mt-2 text-lg text-center font-medium capitalize dark:text-white">
                        {{ $page->trans('hero.title') }}</h2>
                    <p
                        class="mt-4 font-light text-base text-center capitalize dark:text-white lg:text-justify tracking-wider">
                        {{ $page->trans('hero.short') }}
                    </p>
                    <div class="mt-5 flex justify-between gap-5 md:justify-start">
                        <button type="button"
                            class="flex items-center bg-yellow text-white py-2 px-3 rounded-sm capitalize border-2 border-bone hover:opacity-75 active:opacity-100">
                            <svg class="h-4 w-4 fill-white mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V304H176c-35.3 0-64 28.7-64 64V512H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM176 352h32c30.9 0 56 25.1 56 56s-25.1 56-56 56H192v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V448 368c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H192v48h16zm96-80h32c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H304c-8.8 0-16-7.2-16-16V368c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H320v96h16zm80-112c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V432 368z" />
                            </svg>
                            {{ $page->trans('hero.resume') }}
                        </button>
                        <button type="button"
                            class="bg-white text-center text-black py-2 px-4 rounded-sm capitalize border-2 border-bone hover:opacity-75 active:opacity-100">
                            {{ $page->trans('hero.contact') }}
                        </button>
                    </div>
                </div>

            </div>
            <!-- Hero End -->

            <!-- Top Section Footer Start -->
            <div id="top-section-footer" class="flex justify-between -mb-5 lg:mb-1 lg:justify-center lg:relative">
                <!-- Social Links Start -->
                <ul id="top-section-footer-social-links" class="hidden lg:block lg:absolute lg:bottom-20 lg:-left-6">
                    <li>
                        <a href="{{ $page->links->behance }}" target="blank"
                            class="block text-bone text-center cursor-pointer -rotate-90 tracking-widest-x2 uppercase mb-28 hover:opacity-70">
                            Behance
                        </a>

                    </li>
                    <li>
                        <a href="{{ $page->links->linkedin }}" target="blank"
                            class="block text-bone text-center cursor-pointer -rotate-90 tracking-widest-x2 uppercase mb-28 hover:opacity-70">
                            Linkedin
                        </a>

                    </li>
                    <li>
                        <a href="{{ $page->links->github }}" target="blank"
                            class="block text-bone text-center cursor-pointer -rotate-90 tracking-widest-x2 uppercase hover:opacity-70">
                            Github
                        </a>
                    </li>
                </ul>
                <!-- Social Links End -->

                <!-- Dark Mode Switcher Start -->
                <button type="button" id="top-section-footer-dark-mode-toggle-btn"
                    class="lg:fixed lg:top-[4rem] lg:right-[80px]">
                    {{-- <svg class="h-8 w-8 fill-black" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z">
                        </path>
                    </svg> --}}
                    <svg style="color: rgb(223, 211, 201);" width="32" height="32" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8V16Z" fill="#dfd3c9"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM12 4V8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16V20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4Z"
                            fill="#dfd3c9"></path>
                    </svg>
                </button>
                <!-- Dark Mode Switcher End -->

                <!-- Scroll Down Icon Indicator Start -->
                <button type="button" id="top-section-footer-scroll-down-indicator"
                    class="cursor-default hidden -mb-3 lg:mb-2 lg:block">
                    <svg class="h-8 w-8 animate-bounce fill-bone" width="26" height="40" viewBox="0 0 26 40"
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
                <ul id="top-section-footer-lang-switcher-container" class="lg:absolute lg:bottom-12 lg:right-0">
                    <li>
                        <a href="/en" class="lang-switcher-btn dark:text-white {{ $page->selected('en') }}"
                            data-default="true">EN</a>
                    </li>
                    <li>
                        <a href="/fr"
                            class="lang-switcher-btn cursor-pointer dark:text-white {{ $page->selected('fr') }}">FR</a>
                    </li>
                </ul>
                <!-- Language Switcher End -->
            </div>
            <!-- Top Section Footer End -->

            <!-- Animated Background SVGs Start -->
            <div id="svgs-container" class="absolute h-full w-full -z-50">
            </div>
            <!-- Animated Background SVGs End -->

            <!-- Top Section Footer End -->

        </div>
        <!-- Top Section End -->

    </div>
@endsection
