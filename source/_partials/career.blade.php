<div class="section px-8 lg:px-16 bg-yellow-100 dark:bg-inherit">
    <x-section-heading text="{!! $page->trans('career.heading') !!}" />

    <div class="flex flex-col gap-12 dark:text-yellow-900">
        <div
            class="w-full bgx-[#fff8e5c9] lg:-mx-5 -my-3 px-5 py-3 rounded hover:bg-bone/20 bg-white group dark:bg-[#fff8e1] dark:hover:bg-white shadow-sm">
            <div class="relative lg:flex lg:justify-between lg:items-center">
                <div>
                    <h3 class="text-xl capitalize font-medium text-yellow lg:text-2xl">
                        {{ $page->trans('career.second-position.title') }}</h3>
                    <div class="mt-3">
                        <p class="text-md max-w-[180px] md:max-w-[initial]">
                            {{ $page->trans('career.second-position.company') }}</p>
                        <p class="text-sm mt-1 max-w-[180px] md:max-w-[initial]">
                            {{ $page->trans('career.second-position.duration') }}</p>
                        <p class="text-xs mt-1 max-w-[180px] md:max-w-[initial]">
                            {{ $page->trans('career.second-position.location') }}</p>
                    </div>
                </div>
                <div class="mr-4">
                    <img class="absolute right-0 bottom-0 max-w-[5rem] border shadow-xs p-1 lg:static"
                        src="/assets/images/pi-marketing.jpg" alt="PI Mareting">
                </div>
            </div>
        </div>

        <div
            class="w-full bgx-[#fff8e5c9] lg:-mx-5 -my-3 px-5 py-3 rounded hover:bg-bone/20 bg-white group dark:bg-[#fff8e1] dark:hover:bg-white shadow-sm">
            <div class="relative lg:flex lg:justify-between lg:items-center">
                <div>
                    <h3 class="text-xl capitalize font-medium text-yellow lg:text-2xl">
                        {{ $page->trans('career.first-position.title') }}</h3>
                    <div class="mt-3">
                        <p class="text-md max-w-[180px] md:max-w-[initial]">
                            {{ $page->trans('career.first-position.company') }}</p>
                        <p class="text-sm mt-1 max-w-[180px] md:max-w-[initial]">
                            {{ $page->trans('career.first-position.duration') }}</p>
                        <p class="text-xs mt-1 max-w-[180px] md:max-w-[initial]">
                            {{ $page->trans('career.first-position.location') }}</p>
                    </div>
                </div>
                <div class="mr-4">
                    <img class="absolute right-0 bottom-0 max-w-[5rem] border shadow-xs p-1 lg:static"
                        src="/assets/images/map-concepts.jpg" alt="Map-concepts">
                </div>
            </div>
        </div>

        <div
            class="w-full bgx-[#fff8e5c9] lg:-mx-5 -my-3 px-5 py-3 rounded hover:bg-bone/20 bg-white group dark:bg-[#fff8e1] dark:hover:bg-white shadow-sm">
            <div class="relative lg:flex lg:justify-between lg:items-center">
                <div>
                    <h3 class="text-xl capitalize font-medium text-yellow lg:text-2xl">
                        {{ $page->trans('career.last-education.title') }}</h3>
                    <div class="mt-3">
                        <p class="text-md max-w-[180px] md:max-w-[initial]">
                            {{ $page->trans('career.last-education.institute') }}</p>
                        <p class="text-sm mt-1 max-w-[180px] md:max-w-[initial]">
                            {{ $page->trans('career.last-education.duration') }}</p>
                        <p class="text-xs mt-1 max-w-[180px] md:max-w-[initial]">
                            {{ $page->trans('career.last-education.location') }}</p>
                    </div>
                </div>
                <div class="mr-4">
                    <img class="absolute right-0 bottom-0 max-w-[5rem] border shadow-xs p-1 lg:static"
                        src="/assets/images/university-logo.jpg" alt="Université Abdelmalek Essaâdi">
                </div>
            </div>
        </div>
    </div>


    <span class="mt-8 text-sm text-yellow-900 dark:text-yellow-200 italic flex items-center gap-1">
        <svg class="fill-yellow-900 dark:fill-yellow-200" xmlns="http://www.w3.org/2000/svg" height="16"
            width="16"
            viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
        </svg>

        <span>{{ $page->trans('career.linkedin-notice.1') }} <a href="{{ $page->links->linkedin }}" target="_blank"
                class="text-blue-300 underline">Linkedin</a> {{ $page->trans('career.linkedin-notice.2') }}.
        </span>
    </span>
</div>
