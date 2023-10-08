<div class="section px-8 lg:px-16 bg-[#fdf0d259] dark:lg:bg-[#2c2c2c]">
    <x-section-heading text="{!! $page->trans('career.heading') !!}" />

    <div class="flex flex-col gap-12">
        <div class="w-full bgx-[#fff8e5c9] -mx-5 -my-3 px-5 py-3 rounded hover:bg-bone/20 bg-white group dark:bg-[#fff8e1] dark:hover:bg-white shadow-sm">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="capitalize text-2xl font-medium text-yellow">{{ $page->trans('career.secondposition.title') }}</h3>
                    <div class="mt-3">
                        <p class="text-md">{{ $page->trans('career.secondposition.company') }}</p>
                        <p class="text-sm mt-1">{{ $page->trans('career.secondposition.duration') }}</p>
                        <p class="text-xs mt-1">{{ $page->trans('career.secondposition.location') }}</p>
                    </div>
                </div>
                <div class="mr-4">
                    <img class="max-w-[5rem] border shadow-xs p-1" src="https://media.licdn.com/dms/image/C560BAQFHylUm39Mmjw/company-logo_200_200/0/1577814217673?e=1701302400&v=beta&t=sIUeZjrniO7trUaSnW4BrgaL2hyH8XwEcSr1DGUHkXg" alt="PI Mareting">
                </div>
            </div>
        </div>
        
        <div class="w-full bgx-[#fff8e5c9] -mx-5 -my-3 px-5 py-3 rounded hover:bg-bone/20 bg-white group dark:bg-[#fff8e1] dark:hover:bg-white shadow-sm">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="capitalize text-2xl font-medium text-yellow">{{ $page->trans('career.firstposition.title') }}</h3>
                    <div class="mt-3">
                        <p class="text-md">{{ $page->trans('career.firstposition.company') }}</p>
                        <p class="text-sm mt-1">{{ $page->trans('career.firstposition.duration') }}</p>
                        <p class="text-xs mt-1">{{ $page->trans('career.firstposition.location') }}</p>
                    </div>
                </div>
                <div class="mr-4">
                    <img class="max-w-[5rem] border shadow-xs p-1" src="https://media.licdn.com/dms/image/C510BAQETEj-EWFZNRw/company-logo_200_200/0/1519910422356?e=1701302400&v=beta&t=Yf1wrmJ-4_6BzaCFQ_xoI04DDai_iiYp64Ojnzf0oLI" alt="Map-concepts">
                </div>
            </div>
        </div>

        <div class="w-full bgx-[#fff8e5c9] -mx-5 -my-3 px-5 py-3 rounded hover:bg-bone/20 bg-white group dark:bg-[#fff8e1] dark:hover:bg-white shadow-sm">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="capitalize text-2xl font-medium text-yellow">{{ $page->trans('career.lasteducation.title') }}</h3>
                    <div class="mt-3">
                        <p class="text-md">{{ $page->trans('career.lasteducation.institut') }}</p>
                        <p class="text-sm mt-1">{{ $page->trans('career.lasteducation.duration') }}</p>
                        <p class="text-xs mt-1">{{ $page->trans('career.lasteducation.location') }}</p>
                    </div>
                </div>
                <div class="mr-4">
                    <img class="max-w-[5rem] border shadow-xs p-1" src="https://media.licdn.com/dms/image/C4D0BAQH8AUEANxGGXQ/company-logo_200_200/0/1525282007615?e=1701302400&v=beta&t=5CNnO3zQ6_kIzgtJTEcz_F6LdCvP0ICBoPDmI4WbB6k" alt="Université Abdelmalek Essaâdi">
                </div>
            </div>
        </div>
    </div>

    <span class="block mt-8 text-sm text-bone italic">
        * {{ $page->trans('career.linkedinnotice.1') }} <a href="{{ $page->links->linkedin }}" target="_blank" class="text-blue-300 underline">Linkedin</a> {{ $page->trans('career.linkedinnotice.2') }}.
    </span>
</div>