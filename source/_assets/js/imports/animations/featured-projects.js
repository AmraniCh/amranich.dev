import { animateOnVisibility } from "../../helpers";

export default function () {
    animateOnVisibility({
        element: document.querySelectorAll('.featured-projects-section .card'),
        animationClass: "animate-[zoomIn_.7s_ease-out_forwards]",
        options: { threshold: 0.1 }
    });
}
