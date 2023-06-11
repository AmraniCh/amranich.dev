<div class="section-ctr relative">
    <x-section-heading text="{{ $page->trans('about.heading') }}" />

    <div class="flex flex-col justify-between items-center gap-8 lg:flex-row lg:items-end lg:gap-16 sm:items-start">

        <p
            class="text-justify font-light leading-6 pl-4 relative border-l-4 border-l-yellow dark:text-white lg:text-lg lg:leading-7">
            {{ $page->trans('about.content') }}
        </p>


        <div class="">
            <x-blockquote-ship />
        </div>

    </div>
</div>