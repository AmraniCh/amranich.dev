import settings from "./settings";
import navbarMenu from "./imports/navbar-menu";
import darkMode from "./imports/dark-mode";
import scrollEffects from "./imports/scroll-effects";
import languageSwitcher from "./imports/language-switcher";
import heroBackgroundEffects from "./imports/hero-background-effects";

window.addEventListener('DOMContentLoaded', () => {
    
    navbarMenu();
    darkMode();
    languageSwitcher();
    scrollEffects(settings.hideOnScrollY);
    heroBackgroundEffects(settings.heroBackgroundSvg);

});
