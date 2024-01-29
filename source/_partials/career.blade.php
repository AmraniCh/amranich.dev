<div class="section">
    <x-section-heading text="{!! $page->trans('career.heading') !!}" />

    <div class="flex flex-col gap-8 dark:text-yellow-900">
        <div
            class="w-full border-2 border-yellow-900 px-5 py-4 rounded hover:bg-bone/20 bg-white hover:-translate-y-2 hover:transition-transform hover:shadow-lg hover:duration-300 group dark:bg-[#fff8e1] dark:hover:bg-white shadow-sm">
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
            class="w-full border-2 border-yellow-900 px-5 py-4 rounded hover:bg-bone/20 bg-white hover:-translate-y-2 hover:transition-transform hover:shadow-lg hover:duration-300 group dark:bg-[#fff8e1] dark:hover:bg-white shadow-sm">
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
            class="w-full border-2 border-yellow-900 px-5 py-4 rounded hover:bg-bone/20 bg-white hover:-translate-y-2 hover:transition-transform hover:shadow-lg hover:duration-300 group dark:bg-[#fff8e1] dark:hover:bg-white shadow-sm">
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

    <x-anchor link="{{ $page->links->linkedin }}" text="{{ $page->trans('career.linkedin-notice.1') }}" />
</div>
