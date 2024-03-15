import { animateOnVisibility } from "../../helpers";

export default function () {
    const section = document.querySelector(".about-me-section"), options = { threshold: 0.1 };

    animateOnVisibility({
        element: section.querySelector(".text"),
        animationClass: "animate-[zoomIn_.7s_ease-out_.1s_forwards]",
        options,
    });

    animateOnVisibility({
        element: section.querySelector(".favorite-quote"),
        animationClass: "animate-[zoomIn_.7s_ease-out_.3s_forwards]",
        options,
    });
}
