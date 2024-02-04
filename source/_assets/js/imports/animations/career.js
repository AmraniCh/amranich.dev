import { animateOnVisibility } from "../../helpers";

export default function () {
    animateOnVisibility({
        element: document.querySelectorAll(".career-section .card"),
        animationClass: "animate-[fadeInDown_.5s_ease-out_forwards]",
        options: { threshold: .6 }
    });
}
