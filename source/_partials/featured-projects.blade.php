<div id="projects-section" class="section projects-section scroll-indicator"
    data-scroll-indicator-text="{!! $page->trans('scroll-indicator.projects') !!}">
    <x-section-heading text="{!! $page->trans('featured-projects.title') !!}" />

    <div class="flex flex-col gap-10 xl:gap-24">

        <x-featured-project highlight="{{ false }}" snapshot="personal-webiste-snapshot.jpg"
            snapshotAlt="Shakir El Amrani's personal website snapshot" date="{!! $page->trans('featured-projects.first-project.date') !!}"
            title="{!! $page->trans('featured-projects.card-title') !!}" projectTitle="{!! $page->trans('featured-projects.first-project.title') !!}" projectDesc="{!! $page->trans('featured-projects.first-project.desc') !!}">

            <x-slot:stack>
                <x-badge text="PHP" />
                <x-badge text="Jigsaw (SSG)" />
                <x-badge text="Tailwindcss" />
                <x-badge text="Vanilla Js" />
                <x-badge text="ES6" />
            </x-slot>

        </x-featured-project>

        <x-featured-project highlight="{{ true }}" snapshotAlt="FTP file manager web application snapshot"
            snapshot="ftp-filemanager-snapshot.png" date="{!! $page->trans('featured-projects.second-project.date') !!}" title="{!! $page->trans('featured-projects.card-title') !!}"
            projectTitle="{!! $page->trans('featured-projects.second-project.title') !!}" projectDesc="{!! $page->trans('featured-projects.second-project.desc') !!}">

            <x-slot:stack>
                <x-badge text="PHP" />
                <x-badge text="Apache" />
                <x-badge text="MVC" />
                <x-badge text="PHPUnit" />
                <x-badge text="FTP" />
                <x-badge text="RFC959" />
                <x-badge text="SASS" />
                <x-badge text="JavaScript" />
                <x-badge text="Rollup" />
                <x-badge text="Gulp" />
                <x-badge text="PostCss" />
                <x-badge text="ES5" />
                <x-badge text="Pollyfills" />
            </x-slot>

        </x-featured-project>


        <x-featured-project highlight="{{ false }}" snapshot="mysql-database-manager-snapshot.png"
            snapshotAlt="MySQL Database Manager web application snapshot" date="{!! $page->trans('featured-projects.third-project.date') !!}"
            title="{!! $page->trans('featured-projects.card-title') !!}" projectTitle="{!! $page->trans('featured-projects.third-project.title') !!}"
            projectDesc="{!! $page->trans('featured-projects.third-project.desc') !!}">

            <x-slot:stack>
                <x-badge text="PHP" />
                <x-badge text="Apache" />
                <x-badge text="MySQL" />
                <x-badge text="HTML5" />
                <x-badge text="CSS" />
                <x-badge text="jQuery" />
            </x-slot>
        </x-featured-project>

    </div>
</div>
