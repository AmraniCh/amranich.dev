export default function (settings) {

	renderBackgroundStars(settings.heroBackgroundSvg);

	document.getElementById("wrapper").addEventListener("scroll", function () {
		animateOnScrollBackgroundStars(settings, this.scrollTop);
		animateOnScrollSocialLinks(settings.hideOnScrollY, this.scrollTop);
		animateOnScrollLangSwitcher(settings.hideOnScrollY, this.scrollTop);
		animateOnScrollDarkModeBtn(settings.hideOnScrollY, this.scrollTop);
	});
}

function renderBackgroundStars(settings) {
	const $svgContainer = document.getElementById('heroBackgroundSvgContainer');
	const $svgList = [
		`<svg class="w-4 h-4 fill-yellow-200 text-yellow absolute -z-10 opacity-0 animate-[sparkling_8s_ease-out_infinite] dark:fill-dark"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-4.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
            </svg>`,
		`<svg class="w-4 h-4 fill-yellow-200 text-yellow absolute -z-10 opacity-0 animate-[sparkling_8s_ease-out_infinite] dark:fill-dark"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
        </svg>`,
	];
	const device = window.innerWidth < settings.mobileBreakpoint ? 'mobile' : 'desktop';
	const numEachSvg = settings[device].numEachSvg;
	const maxDelaySeconds = settings[device].maxDelaySeconds;
	const verticalRanges = settings[device].verticalRanges;
	const horizontalRanges = settings[device].horizontalRanges;
	var it = 0, il = 0;
	const topValues = [];
	const leftValues = [];

	$svgContainer.innerHTML = '';

	$svgList.forEach($svg => {

		for (var j = 0; j < numEachSvg; j++) {
			const tempDiv = document.createElement('div');
			tempDiv.innerHTML = $svg;
			const $svgElement = tempDiv.firstChild;

			const topMinMax = verticalRanges[it];
			const leftMinMax = horizontalRanges[il];

			const getRandomPosition = (minMax, values) => {
				const generateRandom = () => Math.round(Math.random() * (minMax[1] - minMax[0]) + minMax[0]);

				const isPositionTaken = (random) => {
					for (let v of values) {
						if (random >= (v - 5) && random <= (v + 5)) {
							return true;
						}
					}

					return false;
				};

				var position = generateRandom();
				var tries = 0;

				while (tries < 100 && isPositionTaken(position)) {
					position = generateRandom();
					tries++;
				}

				return position;
			};


			const randTop = getRandomPosition(topMinMax, topValues);
			const randLeft = getRandomPosition(leftMinMax, leftValues);

			topValues.push(randTop);
			leftValues.push(randLeft);

			it = it === verticalRanges.length - 1 ? 0 : it + 1;
			il = il === horizontalRanges.length - 1 ? 0 : il + 1;

			$svgElement.style.top = randTop + '%';
			$svgElement.style.left = randLeft + '%';

			$svgElement.classList.add('animate-[fade-in]');
			$svgElement.style.animationDelay = Math.round(Math.random() * maxDelaySeconds * 10) / 10 + 's';

			$svgContainer.appendChild($svgElement);
		}
	});
}

function animateOnScrollBackgroundStars(settings, scrollY) {
	if (scrollY > settings.hideOnScrollY) {
		document.querySelectorAll('#heroBackgroundSvgContainer svg').forEach($svg => {
			const animationClass = Array.from($svg.classList).find(c => c.search("animate-") !== -1);
			$svg.classList.remove(animationClass);
		});
	} else {
		renderBackgroundStars(settings.heroBackgroundSvg);
	}
}

function animateOnScrollSocialLinks(hideOnScrollY, scrollY) {
	if (window.innerWidth < 1024) {
		return;
	}

	const $ele = document.getElementById("hero-section-footer-social-links");
	const animationStorageKey = "social-links-animation-class";
	var animationClass = Array.from($ele.classList).find(c => c.search("animate-") !== -1);

	if (!animationClass) {
		animationClass = localStorage.getItem(animationStorageKey);
	} else {
		localStorage.setItem(animationStorageKey, animationClass);
	}

	if (scrollY > hideOnScrollY) {
		$ele.classList.remove(animationClass);
		localStorage.setItem(animationStorageKey, animationClass);
	} else if (!$ele.classList.contains(animationClass)) {
		$ele.classList.add(animationClass);
		$ele.style.animationDelay = "0s";
	}
}

function animateOnScrollLangSwitcher(hideOnScrollY, scrollY) {
	const $ele = document.getElementById("hero-section-footer-lang-switcher");
	const animationStorageKey = "lang-switcher-animation-class";
	var animationClass = Array.from($ele.classList).find(c => c.search("animate-") !== -1);

	if (!animationClass) {
		animationClass = localStorage.getItem(animationStorageKey);
	} else {
		localStorage.setItem(animationStorageKey, animationClass);
	}

	if (scrollY > hideOnScrollY) {
		$ele.classList.remove(animationClass);
		localStorage.setItem(animationStorageKey, animationClass);
	} else if (!$ele.classList.contains(animationClass)) {
		$ele.classList.add(animationClass);
		$ele.style.animationDelay = "0s";
	}
}

function animateOnScrollDarkModeBtn(hideOnScrollY, scrollY) {
	if (window.innerWidth >= 1024) { // on small screens only
		return;
	}

	const $button = document.getElementById('dark-mode-toggle-btn-mobile');
	const animationStorageKey = "dark-mode-toggle-btn-animation-class";
	var animationClass = Array.from($button.classList).find(c => c.search("heroControlsFadeInUp") !== -1);

	if (!animationClass) {
		animationClass = localStorage.getItem(animationStorageKey);
	} else {
		localStorage.setItem(animationStorageKey, animationClass);
	}

	if (scrollY > hideOnScrollY) {
		$button.classList.remove(animationClass);
		localStorage.setItem(animationStorageKey, animationClass);
	} else if (!$button.classList.contains(animationClass)) {
		$button.classList.add(animationClass);
		$button.style.animationDelay = "0s";
	}
}