import { animateOnVisibility } from "../../helpers";

export default function () {

    animateOnVisibility({
        element: document.querySelectorAll(".career-section .card"),
        animationClass: "animate-[fadeInDown_.5s_ease-out_forwards]",
        options: { threshold: 0.1 }
    });

    animateOnVisibility({
        element: document.querySelectorAll(".career-section .view-more-link"),
        animationClass: "animate-[fadeInLeft_.6s_ease-out_.5s_forwards]",
    });
}
