export default function () {
    document.querySelectorAll(".career-section .card").forEach((card, i) => {
        const observer = new IntersectionObserver((entries) =>
            card.classList.toggle("animate-[fadeInDown_.6s_ease-out_forwards]", entries[0].isIntersecting)
        );

        observer.observe(card);
    });
}
