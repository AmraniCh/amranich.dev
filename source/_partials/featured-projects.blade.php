<div class="section px-8 xl:px-16">
    <x-section-heading text="{!! $page->trans('featured-projects.title') !!}" />

    <div class="flex flex-col gap-10 xl:gap-16">

        <x-featured-project snapshot="personal-webiste-snapshot.jpg" date="{!! $page->trans('featured-projects.first-project.date') !!}"
            title="{!! $page->trans('featured-projects.card-title') !!}" projectTitle="{!! $page->trans('featured-projects.first-project.title') !!}" projectDesc="{!! $page->trans('featured-projects.first-project.desc') !!}">

            <x-slot:stack>
                <x-badges.base text="PHP" />
                <x-badges.base text="Jigsaw (SSG)" />
                <x-badges.base text="Tailwindcss" />
                <x-badges.base text="Vanilla Js" />
            </x-slot>

        </x-featured-project>

        <x-featured-project highlight="" snapshot="ftp-filemanager-snapshot.png" date="{!! $page->trans('featured-projects.second-project.date') !!}"
            title="{!! $page->trans('featured-projects.card-title') !!}" projectTitle="{!! $page->trans('featured-projects.second-project.title') !!}"
            projectDesc="{!! $page->trans('featured-projects.second-project.desc') !!}">

            <x-slot:stack>
                <x-badges.base text="PHP" />
                <x-badges.base text="Apache" />
                <x-badges.base text="MVC" />
                <x-badges.base text="FTP" />
                <x-badges.base text="RFC959" />
                <x-badges.base text="SASS" />
                <x-badges.base text="JavaScript" />
                <x-badges.base text="Rollup" />
                <x-badges.base text="Gulp" />
                <x-badges.base text="PostCss" />
                <x-badges.base text="Pollyfills" />
            </x-slot>

        </x-featured-project>


        <x-featured-project snapshot="mysql-database-manager-snapshot.png" date="{!! $page->trans('featured-projects.third-project.date') !!}"
            title="{!! $page->trans('featured-projects.card-title') !!}" projectTitle="{!! $page->trans('featured-projects.third-project.title') !!}"
            projectDesc="{!! $page->trans('featured-projects.third-project.desc') !!}">

            <x-slot:stack>
                <x-badges.base text="PHP" />
                <x-badges.base text="Apache" />
                <x-badges.base text="MySQL" />
                <x-badges.base text="HTML5" />
                <x-badges.base text="CSS" />
                <x-badges.base text="jQuery" />
            </x-slot>
        </x-featured-project>

    </div>
</div>
