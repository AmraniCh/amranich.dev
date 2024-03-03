export default function () {
	const $container = document.getElementById("scrollIndicators");

	if (window.innerWidth < 1200) {
		return;
	}

	$container.style.display = 'flex';

	const $ul = document.createElement('ul');
	$ul.classList.add('indicators');
	$container.appendChild($ul);

	const $sections = Array.from(document.getElementsByClassName('scroll-indicator'));

	$sections.forEach(($sec, i) => {
		const li = document.createElement('li');
		const uniqueClass = 'scroll-indicator-' + i;
		const text = $sec.dataset.scrollIndicatorText || '';

		$sec.classList.add(uniqueClass);

		li.classList.add('indicator');
		// li.dataset.scrollIndicatorText = text;
		li.dataset.target = '.' + uniqueClass;
		li.style.animationDelay = ((i + 1) / 5) + 's';
		li.setAttribute('data-title', text)

		li.addEventListener('click', (e) => {
			const ele = e.target.closest('li.indicator');
			const targetSection = ele.dataset.target;
			document.querySelector(targetSection).scrollIntoView({ behavior: 'smooth' });
			li.focus();
		});

		if (i === 0) {
			li.classList.add('active');
		}

		$ul.appendChild(li);
	});


	window.addEventListener('scroll', function () {
		$sections.forEach(($sec) => {
			if (window.scrollY > ($sec.offsetTop - (window.innerHeight / 2))) {
				const match = Array.from($sec.classList).find(value => /scroll-indicator-\d+/.test(value));
				$ul.querySelectorAll('li.indicator').forEach($li => $li.classList.remove('active'));
				$ul.querySelector(`li.indicator[data-target=".${match}"]`).classList.add('active');
			}
		});
	});
}
