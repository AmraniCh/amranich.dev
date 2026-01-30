<div class="relative border-t-2 border-yellow-800 mt-10 p-5 text-sm dark:border-yellow-200 lg:mx-16 lg:text-xs">
    <p class="flex justify-center gap-1 mb-1">
        Crafted with
        <svg class="inline w-4 h-4 fill-yellow-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path
                d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
        </svg>
        by AmraniCh
    </p>

    <ul class="flex flex-col items-center gap-1 lg:flex-row lg:justify-center">
        <li>Hosted on AWS, </li>
        <li>Deployed via FTPS with GitHub Actions</li>
        @if ($page->version)
            <li>
                <a href="{{ $page->changeLogUrl }}" target="_blank">
                    <x-badge class="lg:absolute lg:top-3 lg:right-0" text="{{ $page->version }}" />
                </a>
            </li>
        @endif
    </ul>

    <div class="relative left-1/2 -translate-x-1/2 inline-block mt-0.5 group">
        <svg class="w-6 h-6 inline-block cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <rect x="1" y="4" width="30" height="24" rx="4" ry="4" fill="#b33431"></rect>
            <path d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Z"
                opacity=".15"></path>
            <path
                d="M20.224,21.868l-4.224-3.069-4.224,3.069 1.613-4.965-4.224-3.069h5.221l1.613-4.966 1.613,4.966h5.221l-4.224,3.069 1.613,4.965Z"
                fill="#286038"></path>
        </svg>

        <div
            class="absolute bottom-full left-1/2 mb-2 -translate-x-1/2
                whitespace-nowrap rounded-md bg-black px-2 py-1 text-xs
                text-white opacity-0 shadow-lg transition-opacity
                group-hover:opacity-100">
            اَلْمَغْرِبُ أَوَّلًا وَأَخِيرًا وَلَا غَالِبَ إِلَّا اللهُ
        </div>
    </div>

</div>
