<div class="section px-8 lg:px-16 bg-[#e1c17112] dark:lg:bg-[#2c2c2c]">
    <x-section-heading text="{{ $page->trans('about.heading') }}" />

    <div class="flex flex-col justify-between items-center gap-16 lg:flex-row lg:items-end lg:gap-20">

        <p
            class="text-justify text-md leading-7 md:leading-loose xl:leading-loose md:text-lg xl:text-xl pl-4 relative border-l-2 border-l-yellow border-dotted dark:text-white md:ml-4">
            {{ $page->trans('about.content') }}
        </p>

        <div>
            <x-blockquote-ship />
        </div>
    </div>
    
</div>