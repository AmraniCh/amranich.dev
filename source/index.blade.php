@extends('_layouts.main')

@section('body')
    <div class="container bg-white h-screen max-w-7xl m-auto py-4 px-5 lg:py-8 lg:px-20 relative">

        <!-- Top Bar Start -->
        <div class="flex justify-between items-center flex-wrap">
            <div class="grow-2">
                <img class="w-16 lg:w-24 mb-4 select-none" src="/assets/images/logo.svg" alt="El Amrani Chakir">
            </div>




            <button type="button" class="lg:hidden float-right" data-collapse-toggle="navbar-default">
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
                        class="block py-2 px-4 mb-2 rounded text-white relative bg-yellow before:content-[''] before:block before:w-0 before:h-1 before:rounded before:absolute before:-top-2 before:bg-yellow before:ease-linear before:duration-200 lg:before:active:w-full lg:before:w-full lg:bg-transparent lg:text-inherit lg:p-0 hover:bg-inherit lg:mb-0">Home</a>
                </li>
                <li><a href="#projects"
                        class="block py-2 px-4 mb-2 rounded hover:bg-slate-100 relative before:content-[''] before:block before:w-0 before:h-1 before:rounded before:absolute before:-top-2 before:bg-yellow before:ease-linear before:duration-200 lg:before:active:w-full lg:before:hover:w-full lg:bg-transparent lg:text-inherit lg:p-0 hover:bg-inherit lg:mb-0">Projects</a>
                </li>
                <li><a href="#services"
                        class="block py-2 px-4 mb-2 rounded hover:bg-slate-100 relative before:content-[''] before:block before:w-0 before:h-1 before:rounded before:absolute before:-top-2 before:bg-yellow before:ease-linear before:duration-200 lg:before:active:w-full lg:before:hover:w-full lg:bg-transparent lg:text-inherit lg:p-0 hover:bg-inherit lg:mb-0">Services</a>
                </li>
                <li><a href="#blog"
                        class="block py-2 px-4 mb-2 rounded hover:bg-slate-100 relative before:content-[''] before:block before:w-0 before:h-1 before:rounded before:absolute before:-top-2 before:bg-yellow before:ease-linear before:duration-200 lg:before:active:w-full lg:before:hover:w-full lg:bg-transparent lg:text-inherit lg:p-0 hover:bg-inherit lg:mb-0">Blog</a>
                </li>
                <li><a href="#contact"
                        class="block py-2 px-4 rounded hover:bg-slate-100 relative before:content-[''] before:block before:w-0 before:h-1 before:rounded before:absolute before:-top-2 before:bg-yellow before:ease-linear before:duration-200 lg:before:active:w-full lg:before:hover:w-full lg:bg-transparent lg:text-inherit lg:p-0 hover:bg-inherit lg:mb-0">Contact
                        Me</a></li>

                <li><svg class="h-6 w-6 fill-black absolute bottom-4 right-4 lg:sticky" stroke="currentColor"
                        stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z">
                        </path>
                    </svg></li>
            </ul>

        </div>
        <!-- Top Bar End -->

    </div>
@endsection

@push('scripts')
    <script>
        const navbarMenu = () => {
            document.querySelector('button[data-collapse-toggle="navbar-default"]')
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
