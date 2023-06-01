export default function (settings) {
    const $svgsContainer = document.getElementById('svgs-container');
    const $svgs = [
        `<svg class="w-5 h-5 fill-yellow text-yellow absolute -z-10 animate-sparkling opacity-0"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
            </svg>`,
        `<svg class="w-5 h-5 fill-yellow text-yellow absolute -z-10 animate-sparkling opacity-0"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
        </svg>`,
    ];
    const numEachSvg = settings[window.innerWidth >= settings.mobileBreakpoint ? 'desktop' : 'mobile'].numEachSvg;
    const maxDelaySeconds = settings[window.innerWidth >= settings.mobileBreakpoint ? 'desktop' : 'mobile'].maxDelaySeconds;

    $svgsContainer.innerHTML = '';

    $svgs.forEach($svg => {

        for (var j = 0; j < numEachSvg; j++) {
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = $svg;
            const $svgElement = tempDiv.firstChild;

            const max = 85;
            const min = 15;
            const randTop = Math.round(Math.random() * (max - min) + min);
            const randLeft = Math.round(Math.random() * (max - min) + min);

            $svgElement.style.top = randTop + '%';
            $svgElement.style.left = randLeft + '%';

            $svgElement.classList.add('animate-[fade-in]');
            $svgElement.style.animationDelay = Math.round(Math.random() * maxDelaySeconds * 10) / 10 + 's';

            $svgsContainer.appendChild($svgElement);
        }
    });
}