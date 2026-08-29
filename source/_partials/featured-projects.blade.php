<div id="projects-section" class="section projects-section scroll-spy-indicator-subscriber"
    data-scroll-indicator-text="{!! $page->trans('scroll-indicator.projects') !!}">
    <x-section-heading text="{!! $page->trans('featured-projects.title') !!}" />

    <div class="flex flex-col gap-10 lg:gap-16 xl:gap-24">

        <x-project-card highlight="{{ false }}" snapshot="neuralcodec-rpi-snapshot.jpg"
            snapshotAlt="NeuralCodec-RPi project snapshot" date="{!! $page->trans('featured-projects.fourth-project.date') !!}"
            title="{!! $page->trans('featured-projects.card-title') !!}" projectTitle="{!! $page->trans('featured-projects.fourth-project.title') !!}" projectDesc="{!! $page->trans('featured-projects.fourth-project.desc') !!}"
            sourceLink="https://github.com/AmraniCh/neuralcodec-rpi"
            sourceBtn="{!! $page->trans('featured-projects.source-button') !!}" sketchesBtn="" sketchLink="">

            <x-slot:stack>
                <x-badge text="Python" />
                <x-badge text="Bazel" />
                <x-badge text="SoundStream/Lyra" />
                <x-badge text="UDP" />
                <x-badge text="Raspberry Pi 4" />
                <x-badge text="Deep Learning" />
            </x-slot>

        </x-project-card>

        <x-project-card highlight="{{ true }}" snapshot="ftpguard-snapshot.jpg"
            snapshotAlt="FTPGuard ML-based intrusion detection system snapshot" date="{!! $page->trans('featured-projects.fifth-project.date') !!}"
            title="{!! $page->trans('featured-projects.card-title') !!}" projectTitle="{!! $page->trans('featured-projects.fifth-project.title') !!}" projectDesc="{!! $page->trans('featured-projects.fifth-project.desc') !!}"
            sourceLink="https://github.com/AmraniCh/ftp-ids-ml"
            sourceBtn="{!! $page->trans('featured-projects.source-button') !!}" sketchesBtn="" sketchLink="">

            <x-slot:stack>
                <x-badge text="Python" />
                <x-badge text="Machine Learning" />
                <x-badge text="Isolation Forest" />
                <x-badge text="scikit-learn" />
                <x-badge text="Jupyter" />
                <x-badge text="Flask" />
                <x-badge text="Chart.js" />
                <x-badge text="Tailwind CSS" />
                <x-badge text="Docker" />
            </x-slot>

        </x-project-card>

        <x-project-card highlight="{{ false }}" snapshot="website-snapshot.png"
            snapshotAlt="Shakir El Amrani's personal website snapshot" date="{!! $page->trans('featured-projects.first-project.date') !!}"
            title="{!! $page->trans('featured-projects.card-title') !!}" projectTitle="{!! $page->trans('featured-projects.first-project.title') !!}" projectDesc="{!! $page->trans('featured-projects.first-project.desc') !!}"
            sourceLink="https://github.com/AmraniCh/amranich.dev"
            sketchLink="https://www.behance.net/gallery/238174557/Personal-Portfolio-Website-V1-amranichdev"
            sourceBtn="{!! $page->trans('featured-projects.source-button') !!}" sketchesBtn="{!! $page->trans('featured-projects.sketches-button') !!}">

            <x-slot:stack>
                <x-badge text="PHP" />
                <x-badge text="Jigsaw (SSG)" />
                <x-badge text="JavaScript (ES6)" />
                <x-badge text="Tailwind CSS" />
                <x-badge text="GitHub Actions" />
                <x-badge text="AWS Lightsail" />
                <x-badge text="Debian" />
                <x-badge text="Nginx" />
                <x-badge text="vsftpd" />
                <x-badge text="FTPS" />
            </x-slot>

        </x-project-card>



        <div class="flex justify-center">
            <x-buttons.secondary text="{!! $page->trans('featured-projects.notice.button') !!}" href="#projects-archive"
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
