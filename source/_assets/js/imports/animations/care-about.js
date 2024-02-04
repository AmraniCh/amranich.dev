import { animateOnVisibility } from "../../helpers";

export default function () {
    document.querySelectorAll(".care-about-section .card").forEach((card, i) => {
        var animationClass = "";
        if ((i + 1) % 2 === 1) {
            animationClass = "animate-[fadeInLeft_.6s_ease-out_forwards]";
        } else {
            animationClass = "animate-[fadeInRight_.6s_ease-out_forwards]";
        }

        animateOnVisibility({
            element: card,
            animationClass,
            options: { threshold: .6 }
        })
    });
}