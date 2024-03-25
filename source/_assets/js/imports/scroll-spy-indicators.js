export default function () {
	if (window.innerWidth < 1024) {
		return;
	}

	const $wrapper = document.getElementById("wrapper");
	const $subscribersSections = Array.from(document.getElementsByClassName('scroll-spy-indicator-subscriber'));
	const $indicatorsContainer = document.getElementById("scroll-spy-indicators");

	renderIndicators();
	onScrollHandler();

	function renderIndicators() {
		const $ul = document.createElement('ul');

		$ul.classList.add('indicators');
		$indicatorsContainer.appendChild($ul);

		$subscribersSections.forEach(($section, i) => {
			const li = document.createElement('li');
			const uniqueClass = 'scroll-indicator-' + i;
			const text = $section.dataset.scrollIndicatorText || '';

			$section.classList.add(uniqueClass);

			li.classList.add('indicator');
			li.dataset.target = '.' + uniqueClass;
			li.style.animationDelay = ((i + 1) / 5) + 's';
			li.setAttribute('data-title', text)

			li.addEventListener('click', (e) => {
				const ele = e.target.closest('li.indicator');
				const targetSection = ele.dataset.target;

				if (i === 0) {
					$wrapper.scroll({
						top: 0,
						left: 0,
						behavior: 'smooth'
					});
				} else {
					document.querySelector(targetSection).scrollIntoView({ behavior: 'smooth' });
				}

				li.focus();
			});

			if (i === 0) {
				li.classList.add('active');
			}

			$ul.appendChild(li);
		});
	}

	function onScrollHandler() {
		const $indicatorsList = $indicatorsContainer.querySelector('.indicators');

		$wrapper.addEventListener('scroll', function () {
			$subscribersSections.forEach(($section) => {
				if ($wrapper.scrollTop > ($section.offsetTop - (window.innerHeight / 2))) {
					const dataTarget = Array.from($section.classList).find(value => /scroll-indicator-\d+/.test(value));
					$indicatorsList.querySelectorAll('li.indicator').forEach($li => $li.classList.remove('active'));
					$indicatorsList.querySelector(`li.indicator[data-target=".${dataTarget}"]`).classList.add('active');
				}
			});
		});
	}
}

