<div class="border-t-2 border-yellow-800 mt-10 p-5 text-sm dark:border-yellow-200 lg:mx-16 lg:text-xs">
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
                <a href="..." target="_blank">
                    <x-badge text="{{ $page->version }}" />
                </a>
            </li>
        @endif
    </ul>


    <div class="text-center mt-1">
        <svg class="w-6 h-6 inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <rect x="1" y="4" width="30" height="24" rx="4" ry="4" fill="#b33431"></rect>
            <path
                d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z"
                opacity=".15"></path>
            <path
                d="M20.224,21.868l-4.224-3.069-4.224,3.069,1.613-4.965-4.224-3.069h5.221l1.613-4.966,1.613,4.966h5.221l-4.224,3.069,1.613,4.965Zm-3.456-3.626l1.74,1.264-.665-2.045-1.075,.781Zm-2.611-.781l-.665,2.045,1.74-1.264-1.075-.781Zm.293-.902l1.55,1.126,1.55-1.126-.592-1.822h-1.916l-.592,1.822Zm3.456-1.822l.411,1.264,1.74-1.264h-2.151Zm-5.964,0l1.74,1.264,.411-1.264h-2.151Zm3.393-.902h1.329l-.665-2.046-.665,2.046Z"
                fill="#286038"></path>
        </svg>
    </div>
</div>
