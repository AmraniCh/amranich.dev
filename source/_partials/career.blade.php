<div class="section px-8 lg:px-16 bg-yellow-100 dark:bg-inherit">
    <x-section-heading text="{!! $page->trans('career.heading') !!}" />

    <div class="flex flex-col gap-12 dark:text-yellow-900">
        <div class="w-full bgx-[#fff8e5c9] lg:-mx-5 -my-3 px-5 py-3 rounded hover:bg-bone/20 bg-white group dark:bg-[#fff8e1] dark:hover:bg-white shadow-sm">
            <div class="relative lg:flex lg:justify-between lg:items-center">
                <div>
                    <h3 class="text-xl capitalize font-medium text-yellow lg:text-2xl">{{ $page->trans('career.secondposition.title') }}</h3>
                    <div class="mt-3">
                        <p class="text-md max-w-[180px]">{{ $page->trans('career.secondposition.company') }}</p>
                        <p class="text-sm mt-1 max-w-[180px]">{{ $page->trans('career.secondposition.duration') }}</p>
                        <p class="text-xs mt-1 max-w-[180px]">{{ $page->trans('career.secondposition.location') }}</p>
                    </div>
                </div>
                <div class="mr-4">
                    <img class="absolute right-0 bottom-0 max-w-[5rem] border shadow-xs p-1 lg:static" src="/assets/images/pi-marketing.jpg" alt="PI Mareting">
                </div>
            </div>
        </div>
        
        <div class="w-full bgx-[#fff8e5c9] lg:-mx-5 -my-3 px-5 py-3 rounded hover:bg-bone/20 bg-white group dark:bg-[#fff8e1] dark:hover:bg-white shadow-sm">
            <div class="relative lg:flex lg:justify-between lg:items-center">
                <div>
                    <h3 class="text-xl capitalize font-medium text-yellow lg:text-2xl">{{ $page->trans('career.firstposition.title') }}</h3>
                    <div class="mt-3">
                        <p class="text-md max-w-[180px]">{{ $page->trans('career.firstposition.company') }}</p>
                        <p class="text-sm mt-1 max-w-[180px]">{{ $page->trans('career.firstposition.duration') }}</p>
                        <p class="text-xs mt-1 max-w-[180px]">{{ $page->trans('career.firstposition.location') }}</p>
                    </div>
                </div>
                <div class="mr-4">
                    <img class="absolute right-0 bottom-0 max-w-[5rem] border shadow-xs p-1 lg:static" src="/assets/images/map-concepts.jpg" alt="Map-concepts">
                </div>
            </div>
        </div>

        <div class="w-full bgx-[#fff8e5c9] lg:-mx-5 -my-3 px-5 py-3 rounded hover:bg-bone/20 bg-white group dark:bg-[#fff8e1] dark:hover:bg-white shadow-sm">
            <div class="relative lg:flex lg:justify-between lg:items-center">
                <div>
                    <h3 class="text-xl capitalize font-medium text-yellow lg:text-2xl">{{ $page->trans('career.lasteducation.title') }}</h3>
                    <div class="mt-3">
                        <p class="text-md max-w-[180px]">{{ $page->trans('career.lasteducation.institut') }}</p>
                        <p class="text-sm mt-1 max-w-[180px]">{{ $page->trans('career.lasteducation.duration') }}</p>
                        <p class="text-xs mt-1 max-w-[180px]">{{ $page->trans('career.lasteducation.location') }}</p>
                    </div>
                </div>
                <div class="mr-4">
                    <img class="absolute right-0 bottom-0 max-w-[5rem] border shadow-xs p-1 lg:static" src="/assets/images/university-logo.jpg" alt="Université Abdelmalek Essaâdi">
                </div>
            </div>
        </div>
    </div>

    <span class="block mt-8 text-sm text-brown-400 italic">
        * {{ $page->trans('career.linkedinnotice.1') }} <a href="{{ $page->links->linkedin }}" target="_blank" class="text-blue-300 underline">Linkedin</a> {{ $page->trans('career.linkedinnotice.2') }}.
    </span>
</div>