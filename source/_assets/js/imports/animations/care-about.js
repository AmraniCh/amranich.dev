export default function () {
    document.querySelectorAll(".care-about-section .card").forEach((card, i) => {
        var animationClass = "";
        if ((i + 1) % 2 === 1) {
            animationClass = "animate-[fadeInLeft_.6s_ease-out_.3s_forwards]";
        } else {
            animationClass = "animate-[fadeInRight_.6s_ease-out_.3s_forwards]";
        }

        const observer = new IntersectionObserver((entries) =>
            card.classList.toggle(animationClass, entries[0].isIntersecting)
        );

        observer.observe(card);
    });
}