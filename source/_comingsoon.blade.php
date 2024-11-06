@extends('_layouts.comingsoon')

@section('body')
    <div class="relative bg-glass bg-no-repeat bg-fit flex justify-center items-center h-full">
        <div class="flex flex-col justify-center items-center text-yellow-800">
            <img class="w-24 mb-4 select-none sm:mb-0 sm:absolute sm:top-8 sm:left-8 sm:w-[105px]"
                src="/assets/images/logo.svg" alt="El Amrani Chakir">
            <img class="rounded-full mb-2 w-44" src="/assets/images/me.png" alt="El Amrani Chakir">
            <h1 class="text-xl tracking-wider sm:text-3xl">amranich.dev</h1>
            <p class="text-3xl py-2 script-font text-brown text-center tracking-wide sm:text-6xl sm:py-4">
                I am almost there!
            </p>
            <div class="flex flex-col align-start sm:flex-row sm:space-x-8">
                <a class="flex items-center gap-2 tracking-widest-x2 font-light" href="{{ $page->links->github }}"
                    target="blank">
                    GitHub
                    <svg class="w-3 stroke-yellow-900" viewBox="0 0 13 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.833008 7H12.1663M7.20801 1.16797L12.1663 7.0013L7.20801 12.8346" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>

                <a class="flex items-center gap-2 tracking-widest-x2 font-light" href="{{ $page->links->linkedin }}"
                    target="blank">
                    Linkedin
                    <svg class="w-3 stroke-yellow-900" viewBox="0 0 13 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.833008 7H12.1663M7.20801 1.16797L12.1663 7.0013L7.20801 12.8346" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>

                <a class="flex items-center gap-2 tracking-widest-x2 font-light" href="{{ $page->links->behance }}"
                    target="blank">
                    Behance
                    <svg class="w-3 stroke-yellow-900" viewBox="0 0 13 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.833008 7H12.1663M7.20801 1.16797L12.1663 7.0013L7.20801 12.8346" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>



        <span class="absolute text-sm bottom-4 tracking-widest-x2 font-medium flex gap-2 lg:bottom-6 sm:right-8">
            <svg class="w-4" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13.6663 2.0013C13.6663 1.26797 13.0663 0.667969 12.333 0.667969H1.66634C0.933008 0.667969 0.333008 1.26797 0.333008 2.0013V10.0013C0.333008 10.7346 0.933008 11.3346 1.66634 11.3346H12.333C13.0663 11.3346 13.6663 10.7346 13.6663 10.0013V2.0013ZM12.333 2.0013L6.99967 5.33464L1.66634 2.0013H12.333ZM12.333 10.0013H1.66634V3.33464L6.99967 6.66797L12.333 3.33464V10.0013Z"
                    fill="#846D30" />
            </svg>

            <a href="mailto:contact@amranich.dev">
                {{ $page->email }}
            </a>
        </span>


    </div>
@endsection
