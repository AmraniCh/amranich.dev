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

        <div
            class="tip flex flex-col items-center gap-4 p-4 bg-white border border-dashed border-yellow-800 rounded-lg dark:bg-dark dark:border-yellow-200 lg:flex-row">
            <div class="flex flex-col items-center gap-1 lg:flex-row">
                <svg class="inline w-8 h-8 shrink-0 fill-yellow-400 lg:w-10 lg:h-10 dark:fill-yellow-200"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px">
                    <path
                        d="M 6.5292969 2.515625 A 1 1 0 0 0 5.8085938 2.8085938 A 1 1 0 0 0 5.8085938 4.2226562 A 1 1 0 0 0 7.2226562 4.2226562 A 1 1 0 0 0 7.2226562 2.8085938 A 1 1 0 0 0 6.5292969 2.515625 z M 23.5 2.515625 A 1 1 0 0 0 22.777344 2.8085938 A 1 1 0 0 0 22.777344 4.2226562 A 1 1 0 0 0 24.191406 4.2226562 A 1 1 0 0 0 24.191406 2.8085938 A 1 1 0 0 0 23.5 2.515625 z M 15 3 C 10.029 3 6 7.029 6 12 C 6 17 10 19 12 23 L 18 23 C 20 19 24 17 24 12 C 24 7.029 19.971 3 15 3 z M 15 6 L 15 11 L 19 11 L 15 18 L 15 13 L 11 13 L 15 6 z M 3 11 A 1 1 0 0 0 2 12 A 1 1 0 0 0 3 13 A 1 1 0 0 0 4 12 A 1 1 0 0 0 3 11 z M 27 11 A 1 1 0 0 0 26 12 A 1 1 0 0 0 27 13 A 1 1 0 0 0 28 12 A 1 1 0 0 0 27 11 z M 6.5292969 19.484375 A 1 1 0 0 0 5.8066406 19.777344 A 1 1 0 0 0 5.8066406 21.191406 A 1 1 0 0 0 7.2226562 21.191406 A 1 1 0 0 0 7.2226562 19.777344 A 1 1 0 0 0 6.5292969 19.484375 z M 23.498047 19.486328 A 1 1 0 0 0 22.777344 19.777344 A 1 1 0 0 0 22.777344 21.193359 A 1 1 0 0 0 24.191406 21.193359 A 1 1 0 0 0 24.191406 19.777344 A 1 1 0 0 0 23.498047 19.486328 z M 12 25 L 12 26 C 12 27.105 12.895 28 14 28 A 1 1 0 0 0 15 29 A 1 1 0 0 0 16 28 C 17.105 28 18 27.105 18 26 L 18 25 L 12 25 z" />
                </svg>
                <p class="text-center lg:text-left lg:text-lg">
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
