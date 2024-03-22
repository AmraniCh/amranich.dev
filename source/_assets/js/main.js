import settings from "./settings";
import navbarMenu from "./imports/navbar-menu";
import darkMode from "./imports/dark-mode-switcher";
import animations from "./imports/animations";
import githubRepos from "./imports/github-repos";
import contactForm from "./imports/contact-form";
import scrollIndicators from "./imports/scroll-indicators";

window.addEventListener("DOMContentLoaded", () => {
	// set the hero section height (92% of viewport height) on window resize
	window.addEventListener("resize", (function f() {
		document.querySelector('.hero-section')
			.style
			.height
			= (window.innerHeight * 92) / 100 + "px";

		return f;
	})());

	navbarMenu();
	darkMode();
	animations(settings.animations);
	githubRepos(settings.githubRepos);
	contactForm();
	scrollIndicators();
});
