import settings from "./settings";
import navbarMenu from "./imports/navbar-menu";
import darkMode from "./imports/dark-mode";
import scrollEffects from "./imports/scroll-effects";
import languageSwitcher from "./imports/language-switcher";
import heroBackgroundEffects from "./imports/hero-background-effects";
import githubRepos from "./imports/github-repos";
import contactForm from "./imports/contact-form";

window.addEventListener("DOMContentLoaded", () => {
    navbarMenu();
    darkMode();
    languageSwitcher();
    scrollEffects(settings.hideOnScrollY);
    heroBackgroundEffects(settings.heroBackgroundSvg);
    githubRepos(settings.githubRepos);
    contactForm();
});
