export default function () {
    document.querySelectorAll('.featured-projects-section .card').forEach((card, i) => {
        const observer = new IntersectionObserver((entries) =>
            card.classList.toggle('animate-[zoomIn_.7s_ease-out_.2s_forwards]', entries[0].isIntersecting)
        );
        observer.observe(card);
    });
}
