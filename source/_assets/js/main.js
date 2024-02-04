import settings from "./settings";
import navbarMenu from "./imports/navbar-menu";
import darkMode from "./imports/dark-mode";
import languageSwitcher from "./imports/language-switcher";
import githubRepos from "./imports/github-repos";
import contactForm from "./imports/contact-form";
import animations from "./imports/animations";

window.addEventListener("DOMContentLoaded", () => {
	navbarMenu();
	darkMode();
	languageSwitcher();
	animations(settings.animations);
	githubRepos(settings.githubRepos);
	contactForm();
});
