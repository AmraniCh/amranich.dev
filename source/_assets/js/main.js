import settings from "./settings";
import navbarMenu from "./imports/navbar-menu";
import darkMode from "./imports/dark-mode-switcher";
import animations from "./imports/animations";
import githubRepos from "./imports/github-repos";
import contactForm from "./imports/contact-form";
import scrollSpyIndicators from "./imports/scroll-spy-indicators";
import animatePortraitSketch from "./imports/portrait-sketch-animation";

window.addEventListener("DOMContentLoaded", () => {
	// set the hero section height (92% of viewport height) on window resize
	window.addEventListener("resize", (function f() {
		document.querySelector('.hero-section')
			.style
			.height
			= (window.innerHeight * 92) / 100 + "px";

		return f;
	})());

	const initModules = [
		navbarMenu,
		darkMode,
		() => animations(settings.animations),
		() => githubRepos(settings.githubRepos),
		contactForm,
		scrollSpyIndicators,
		animatePortraitSketch
	];

	initModules.forEach(fn => fn());
});