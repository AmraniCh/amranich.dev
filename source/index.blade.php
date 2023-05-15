@extends('_layouts.main')

@section('body')
    <div class="container bg-white h-screen max-w-7xl m-auto py-4 px-5 lg:py-8 lg:px-20 rounded-lg drop-shadow-lg">

        <!-- Top Bar Start -->
        <div class="flex justify-between items-center flex-wrap">
            <div class="grow-2">
                <img class="w-16 lg:w-24 mb-4 select-none" src="/assets/images/logo.svg" alt="El Amrani Chakir">
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
                class="hidden flex flex-col grow-1 bg-slate-50 rounded p-4 w-full lg:flex lg:justify-between lg:flex-row lg:sticky lg:bg-transparent lg:w-auto">

                <li><a href="#home"
                        class="block py-2 px-4 mb-2 rounded text-white relative bg-yellow before:content-[''] before:block before:w-0 before:h-1 before:rounded before:absolute before:-top-2 before:bg-yellow before:ease-linear before:duration-200 lg:before:active:w-full lg:before:w-full lg:bg-transparent lg:text-inherit lg:p-0 lg:hover:bg-inherit lg:mb-0">Home</a>
                </li>
                <li><a href="#projects"
                        class="block py-2 px-4 mb-2 rounded hover:bg-slate-100 relative before:content-[''] before:block before:w-0 before:h-1 before:rounded before:absolute before:-top-2 before:bg-yellow before:ease-linear before:duration-200 lg:before:active:w-full lg:before:hover:w-full lg:bg-transparent lg:text-inherit lg:p-0 lg:hover:bg-inherit lg:mb-0">Projects</a>
                </li>
                <li><a href="#services"
                        class="block py-2 px-4 mb-2 rounded hover:bg-slate-100 relative before:content-[''] before:block before:w-0 before:h-1 before:rounded before:absolute before:-top-2 before:bg-yellow before:ease-linear before:duration-200 lg:before:active:w-full lg:before:hover:w-full lg:bg-transparent lg:text-inherit lg:p-0 lg:hover:bg-inherit lg:mb-0">Services</a>
                </li>
                <li><a href="#blog"
                        class="block py-2 px-4 mb-2 rounded hover:bg-slate-100 relative before:content-[''] before:block before:w-0 before:h-1 before:rounded before:absolute before:-top-2 before:bg-yellow before:ease-linear before:duration-200 lg:before:active:w-full lg:before:hover:w-full lg:bg-transparent lg:text-inherit lg:p-0 lg:hover:bg-inherit lg:mb-0">Blog</a>
                </li>
                <li><a href="#contact"
                        class="block py-2 px-4 rounded hover:bg-slate-100 relative before:content-[''] before:block before:w-0 before:h-1 before:rounded before:absolute before:-top-2 before:bg-yellow before:ease-linear before:duration-200 lg:before:active:w-full lg:before:hover:w-full lg:bg-transparent lg:text-inherit lg:p-0 lg:hover:bg-inherit lg:mb-0">Contact
                        Me</a></li>

                <li><button type="button" id="dark-mode-toggle-btn" class="absolute bottom-4 right-4 lg:sticky -ml-2"><svg
                            class="h-6 w-6 fill-black" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z">
                            </path>
                        </svg></button></li>
            </ul>

        </div>
        <!-- Top Bar End -->


        <!-- Hero Start -->

        {{-- <div class="absolute left-0 top-0 h-screen flex justify-center items-center w-full">
            <img class="rounded-full mb-2 w-40" src="assets/images/me.jpg" alt="El Amrani Chakir">
        </div> --}}

        <div class="mt-12 flex items-center flex-col">
            <img class="rounded-full mb-2 w-40" src="assets/images/me.jpg" alt="El Amrani Chakir">

            <span class="mt-2">Hi there 👋 I'am</span>
            <h1 class="mt-2 text-4xl font-medium">El Amrani Shakir</h1>
            <h2 class="mt-2 text-lg font-medium">A Software Developer</h2>
            <p class="mt-4 text-center font-light">
                Passionate developer who loves building things from scratch, coding, problem-solving, and contributing to
                the open source community. Enjoys continuous learning.
            </p>
            <div class="mt-5 flex justify-between gap-5">
                <button type="button"
                    class="flex items-center bg-yellow text-white py-2 px-3 rounded-sm uppercase border-2 border-bone hover:opacity-75 active:border-4 active:opacity-100">
                    <svg class="h-4 w-4 fill-white mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V304H176c-35.3 0-64 28.7-64 64V512H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM176 352h32c30.9 0 56 25.1 56 56s-25.1 56-56 56H192v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V448 368c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H192v48h16zm96-80h32c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H304c-8.8 0-16-7.2-16-16V368c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H320v96h16zm80-112c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V432 368z" />
                    </svg>
                    resume
                </button>
                <button type="button"
                    class="bg-white text-center text-black py-2 px-4 rounded-sm capitalize border-2 border-bone hover:opacity-75 active:border-4 active:opacity-100">
                    Contact Me!
                </button>
            </div>
        </div>

        <!-- Hero End -->

    </div>
@endsection

@push('scripts')
    <script>
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


        [navbarMenu, darkModeToggle].forEach(f => f());
    </script>
@endpush
