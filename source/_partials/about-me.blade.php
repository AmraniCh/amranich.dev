<div class="colored-section">
    <x-section-heading text="{!! $page->trans('about.heading') !!}" />

    <div class="flex flex-col justify-between items-center gap-16 lg:flex-row lg:gap-20">

        <div class="flex flex-col gap-6">
            <p
                class="first-letter:text-5xl text-md text-justify leading-7 md:leading-loose xl:leading-loose md:text-lg xl:text-xl md:ml-4">
                {{ $page->trans('about.content.1') }}
            </p>

            <p class="text-md text-justify leading-7 md:leading-loose xl:leading-loose md:text-lg xl:text-xl md:ml-4">
                {{ $page->trans('about.content.2') }}
            </p>

            <p class="text-md text-justify leading-7 md:leading-loose xl:leading-loose md:text-lg xl:text-xl md:ml-4">
                {{ $page->trans('about.content.3') }}
            </p>
        </div>

        <div>
            <x-blockquote-ship />
        </div>
    </div>

</div>
