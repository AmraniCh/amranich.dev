<div id="projects-section" class="section projects-section scroll-spy-indicator-subscriber"
    data-scroll-indicator-text="{!! $page->trans('scroll-indicator.projects') !!}">
    <x-section-heading text="{!! $page->trans('featured-projects.title') !!}" />

    <div class="flex flex-col gap-10 lg:gap-16 xl:gap-24">

        <x-project-card highlight="{{ false }}" snapshot="website-snapshot.jpg"
            snapshotAlt="Shakir El Amrani's personal website snapshot" date="{!! $page->trans('featured-projects.first-project.date') !!}"
            title="{!! $page->trans('featured-projects.card-title') !!}" projectTitle="{!! $page->trans('featured-projects.first-project.title') !!}" projectDesc="{!! $page->trans('featured-projects.first-project.desc') !!}"
            sourceLink="https://github.com/AmraniCh/amranich.dev" sketchLink="" sourceBtn="{!! $page->trans('featured-projects.source-button') !!}"
            sketchesBtn="{!! $page->trans('featured-projects.sketches-button') !!}">

            <x-slot:stack>
                <x-badge text="PHP" />
                <x-badge text="Jigsaw (SSG)" />
                <x-badge text="Tailwindcss" />
                <x-badge text="Vanilla Js" />
                <x-badge text="ES6" />
                <x-badge text="Github Actions" />
            </x-slot>

        </x-project-card>

        <x-project-card highlight="{{ true }}" snapshotAlt="FTP file manager web application snapshot"
            snapshot="ftp-filemanager-snapshot.png" date="{!! $page->trans('featured-projects.second-project.date') !!}" title="{!! $page->trans('featured-projects.card-title') !!}"
            projectTitle="{!! $page->trans('featured-projects.second-project.title') !!}" projectDesc="{!! $page->trans('featured-projects.second-project.desc') !!}"
            sourceLink="https://github.com/AmraniCh/ftp-filemanager"
            sketchLink="https://www.behance.net/gallery/104400253/FTP-Client-web-application"
            sourceBtn="{!! $page->trans('featured-projects.source-button') !!}" sketchesBtn="{!! $page->trans('featured-projects.sketches-button') !!}">

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

        </x-project-card>

        <x-project-card highlight="{{ false }}" snapshot="mysql-database-manager-snapshot.png"
            snapshotAlt="MySQL Database Manager web application snapshot" date="{!! $page->trans('featured-projects.third-project.date') !!}"
            title="{!! $page->trans('featured-projects.card-title') !!}" projectTitle="{!! $page->trans('featured-projects.third-project.title') !!}"
            projectDesc="{!! $page->trans('featured-projects.third-project.desc') !!}" sourceLink="https://github.com/AmraniCh/php-databases-manager"
            sketchLink="https://www.behance.net/gallery/90446911/PHP-Databases-Manager"
            sourceBtn="{!! $page->trans('featured-projects.source-button') !!}" sketchesBtn="{!! $page->trans('featured-projects.sketches-button') !!}">

            <x-slot:stack>
                <x-badge text="PHP" />
                <x-badge text="Apache" />
                <x-badge text="MySQL" />
                <x-badge text="HTML5" />
                <x-badge text="CSS" />
                <x-badge text="jQuery" />
            </x-slot>
        </x-project-card>



        <div class="relative group/ctr">
            <span
                class="absolute top-0 left-0 mt-1 ml-1 h-full w-full rounded bg-yellow-900 group-hover/ctr:top-0.5 group-hover/ctr:left-0.5 group-hover/ctr:duration-100 dark:bg-dark dark:border-2 dark:border-yellow-200"></span>


            <div
                class="tip flex flex-col items-center gap-2 bg-white border border-solid border-yellow-800 rounded-lg p-4 dark:bg-dark dark:border-yellow-200 lg:flex-row lg:gap-4">

                <div class="relative flex flex-col items-center gap-3 lg:flex-row">
                    <svg class="inline w-10 h-10 shrink-0 lg:w-12 lg:h-12 fill-yellow-200 stroke-yellow-800 dark:fill-yellow-800 dark:stroke-yellow-200"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                    </svg>


                    <p class="text-justify [text-align-last:center] lg:[text-align-last:left] lg:text-lg">
                        {!! $page->trans('featured-projects.notice') !!}
                    </p>
                </div>

                <x-buttons.secondary text="{!! $page->trans('featured-projects.notice.button') !!}" class="shrink-0" href="#projetcs-archive"
                    :reverseDirection="true">
                    <svg class="w-5 h-5 fill-brown-500 group-hover:fill-yellow-50 group-hover:scale-125 group-hover:duration-300 dark:fill-yellow-200 dark:group-hover:fill-yellow-900"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                    </svg>
                </x-buttons.secondary>
            </div>
        </div>
    </div>
</div>
