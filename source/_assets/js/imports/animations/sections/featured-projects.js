import { animateOnVisibility } from "../../../helpers";

export default function () {
    const cards = Array.from(document.querySelectorAll('.projects-section .card'));
    const tip = document.querySelector('.projects-section .tip');

    [...cards, tip].forEach(e => animateOnVisibility({
        element: e,
        animationClass: "animate-[zoomIn_.7s_ease-out_forwards]",
        options: { threshold: 0.1 }
    }));
}
