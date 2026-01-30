<div id="career-section" class="section career-section scroll-spy-indicator-subscriber"
    data-scroll-indicator-text="{!! $page->trans('scroll-indicator.career') !!}">
    <x-section-heading text="{!! $page->trans('career.heading') !!}" />

    <div class="relative flex flex-col gap-2">
        <x-career-card style="animation-delay: .2s" title="{{ $page->trans('career.4-position.title') }}"
            company="{{ $page->trans('career.4-position.company') }}"
            duration="{{ $page->trans('career.4-position.duration') }}"
            durationShort="{{ $page->trans('career.4-position.durationShort') }}"
            location="{{ $page->trans('career.4-position.location') }}"
            logo="{{ $page->trans('career.4-position.location') }}" logoUrl="/assets/images/company-placeholder.svg"
            logoAlt="{{ $page->trans('career.4-position.company') }}" />

        <x-career-card style="animation-delay: .3s" title="{{ $page->trans('career.3-position.title') }}"
            company="{{ $page->trans('career.3-position.company') }}"
            duration="{{ $page->trans('career.3-position.duration') }}"
            durationShort="{{ $page->trans('career.3-position.durationShort') }}"
            location="{{ $page->trans('career.3-position.location') }}"
            logo="{{ $page->trans('career.3-position.location') }}" logoUrl="/assets/images/company-placeholder.svg"
            logoAlt="{{ $page->trans('career.3-position.company') }}" />

        <x-career-card style="animation-delay: .4s" title="{{ $page->trans('career.2-position.title') }}"
            company="{{ $page->trans('career.2-position.company') }}"
            duration="{{ $page->trans('career.2-position.duration') }}"
            durationShort="{{ $page->trans('career.2-position.durationShort') }}"
            location="{{ $page->trans('career.2-position.location') }}"
            logo="{{ $page->trans('career.2-position.location') }}" logoUrl="/assets/images/company-placeholder.svg"
            logoAlt="{{ $page->trans('career.2-position.company') }}" />

        <x-career-card style="animation-delay: .5s" title="{{ $page->trans('career.1-position.title') }}"
            company="{{ $page->trans('career.1-position.company') }}"
            duration="{{ $page->trans('career.1-position.duration') }}"
            durationShort="{{ $page->trans('career.1-position.durationShort') }}"
            location="{{ $page->trans('career.1-position.location') }}"
            logo="{{ $page->trans('career.1-position.location') }}" logoUrl="/assets/images/map-concepts.jpg"
            logoAlt="{{ $page->trans('career.1-position.company') }}" />

        <x-career-card style="animation-delay: .6s" title="{{ $page->trans('career.last-education.title') }}"
            company="{{ $page->trans('career.last-education.institute') }}"
            duration="{{ $page->trans('career.last-education.duration') }}"
            location="{{ $page->trans('career.last-education.location') }}"
            logo="{{ $page->trans('career.last-education.location') }}" logoUrl="/assets/images/university-logo.jpg"
            logoAlt="{{ $page->trans('career.last-education.institute') }}" />
    </div>

    <x-anchor class="view-more-link opacity-0" link="{{ $page->links->linkedin }}"
        text="{{ $page->trans('career.linkedin-notice.1') }}" />
</div>
