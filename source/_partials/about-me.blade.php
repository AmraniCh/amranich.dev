<div class="section about-me-section scroll-indicator" data-scroll-indicator-text="{!! $page->trans('scroll-indicator.about') !!}">
    <x-section-heading text="{!! $page->trans('about.heading') !!}" />

    <div class="relative flex flex-col justify-between items-center gap-16 lg:flex-row lg:gap-20">
        <div class="noscript-opacity-1 flex flex-col gap-6 opacity-0 text animate-[zoomIn_.7s_ease-out_.1s_forwards]">
            <p
                class="first-letter:text-5xl text-justify lg:text-left text-md leading-7 md:leading-loose xl:leading-loose md:text-lg xl:text-xl md:ml-4">
                {{ $page->trans('about.content.1') }}
            </p>
            <p
                class="text-justify lg:text-left text-md leading-7 md:leading-loose xl:leading-loose md:text-lg xl:text-xl md:ml-4">
                {{ $page->trans('about.content.2') }}
            </p>
            <p
                class="text-justify lg:text-left text-md leading-7 md:leading-loose xl:leading-loose md:text-lg xl:text-xl md:ml-4">
                {{ $page->trans('about.content.3') }}
            </p>
        </div>

        <x-favorite-quote />
    </div>
</div>
