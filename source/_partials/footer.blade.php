<div class="border-t border-brown-300 pt-4 dark:border-[#463103] dark:border-t-2">
    <div class="flex flex-col items-center gap-1 text-sm lg:flex-row lg:justify-center lg:text-xs">
        <span>
            Crafted with
            <svg class="inline w-4 h-4 fill-yellow-300 mx-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                    d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
            </svg>
            By AmraniCh,
        </span>
        <span>Hosted on Hostinger</span>
        <span>and Deployed via FTP with Github Actions</span>
        @if ($page->version)
            <a class="lg:ml-1" href="https://github.com/AmraniCh/amranich.dev/releases/tag/v0.1.8" target="_blank">
                <x-badges.base text="{{ $page->version }}" />
            </a>
        @endif
    </div>
</div>
