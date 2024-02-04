import { animateOnVisibility } from "../../helpers";

export default function () {
    const section = document.querySelector(".about-me-section");
    const options = { threshold: 0.6 };
    animateOnVisibility({
        element: section.querySelector(".text"),
        animationClass: "animate-[zoomIn_.7s_ease-out_.2s_forwards]",
        options,
    });
    animateOnVisibility({
        element: section.querySelector(".favorite-quote"),
        animationClass: "animate-[zoomIn_.7s_ease-out_.4s_forwards]",
        options,
    });
}
