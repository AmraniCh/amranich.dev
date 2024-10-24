@extends('_layouts.404')

@section('body')
    <div class="flex justify-center items-center h-screen bg-yellow-200 overflow-hidden dark:bg-dark">
        <div class="flex flex-col items-center gap-4">
            <svg class="w-44" viewBox="0 0 258 193" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="fill-dark stroke-yellow-500 dark:fill-yellow-200 dark:stroke-yellow-900"
                    d="M175.375 82.4699H153.521L151.7 79.4339L131.667 46.0601L113.022 79.4339L111.331 82.4699L63.438 168.192H38.8955L132.578 6.91797L173.641 79.4339L175.375 82.4699Z"
                    stroke-width="6" stroke-linejoin="round" />

                <path class="fill-dark stroke-yellow-500 dark:fill-yellow-200 dark:stroke-yellow-900"
                    d="M220.492 168.191H84.9014L119.829 105.238H185.37L196.275 126.056H133.813L121.52 146.896H207.202L220.492 168.191Z"
                    stroke-width="6" stroke-linejoin="round" />
            </svg>

            <div
                class="drop-shadow-none xl:after:content-[url('/assets/images/flash-dark.svg')] xl:after:absolute xl:after:top-[-159%] xl:after:right-[-191%] xl:after:-z-10 xl:before:content-[url('/assets/images/flash-dark.svg')] xl:before:absolute xl:before:bottom-[-146%] xl:before:left-[-194%] xl:before:-z-10 xl:before:rotate-180 dark:text-yellow-200 xl:dark:after:content-[url('/assets/images/flash-light.svg')] xl:dark:before:content-[url('/assets/images/flash-light.svg')]">
                <strong
                    class="text-dark text-[18.75rem] leading-[16rem] drop-shadow-[7px_7px_0px_rgba(225,193,113,1)] dark:text-yellow-200 dark:drop-shadow-[7px_7px_0px_rgba(106,87,38,1)]">404</strong>
            </div>

            <p class="text-dark dark:text-yellow-200">
                {{ $page->trans('not-found-page.p1') }}
            </p>

            <a href="/">
                <button type="button" class="group relative primary-btn">
                    <span
                        class="absolute top-0 left-0 mt-1 ml-1 h-full w-full rounded bg-yellow-500 group-hover:top-0.5 group-hover:left-0.5 group-hover:duration-100 dark:bg-dark dark:border-2 dark:border-yellow-200"></span>

                    <span
                        class="flex justify-center items-center gap-2 uppercase font-bold relative h-full w-full rounded bg-dark px-3 py-1 md:px-6 md:py-2 text-base text-yellow-200 transition duration-100 dark:bg-yellow-200 dark:text-yellow-900 dark:border-none">


                        <svg class="inline h-5 w-5 fill-yellow-200 dark:fill-yellow-900" viewBox="0 0 18 15" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.875 6.42934H3.5325L7.61625 1.75833C7.80721 1.53954 7.89908 1.25748 7.87165 0.974193C7.84422 0.690905 7.69974 0.429595 7.47 0.247748C7.24026 0.0659016 6.94407 -0.0215855 6.64659 0.00453334C6.34911 0.0306521 6.07471 0.168237 5.88375 0.387021L0.25875 6.81502C0.220136 6.86566 0.186256 6.91944 0.1575 6.97572C0.1575 7.02928 0.1575 7.06142 0.0787502 7.11499C0.0277579 7.23783 0.00105876 7.36859 0 7.50067C0.00105876 7.63275 0.0277579 7.76351 0.0787502 7.88635C0.0787502 7.93992 0.0787499 7.97206 0.1575 8.02562C0.186256 8.0819 0.220136 8.13568 0.25875 8.18632L5.88375 14.6143C5.98952 14.7353 6.12198 14.8325 6.2717 14.8992C6.42142 14.9658 6.58473 15.0003 6.75 15C7.01286 15.0005 7.2676 14.9133 7.47 14.7536C7.58392 14.6637 7.67808 14.5532 7.7471 14.4286C7.81612 14.3039 7.85864 14.1675 7.87223 14.0272C7.88581 13.8869 7.8702 13.7454 7.82627 13.6108C7.78235 13.4763 7.71098 13.3513 7.61625 13.243L3.5325 8.572H16.875C17.1734 8.572 17.4595 8.45913 17.6705 8.25822C17.8815 8.0573 18 7.7848 18 7.50067C18 7.21653 17.8815 6.94404 17.6705 6.74312C17.4595 6.54221 17.1734 6.42934 16.875 6.42934Z" />
                        </svg>

                        {{ $page->trans('not-found-page.back-button') }}
                    </span>

                </button>
            </a>
        </div>
    </div>
@endsection
