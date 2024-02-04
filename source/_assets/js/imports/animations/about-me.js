export default function () {
    [
        document.querySelector(".about-me-section .text"),
        document.querySelector(".about-me-section .favorite-quote")
    ]
        .forEach((ele, i) => {
            const observer = new IntersectionObserver((entries) => {
                ele.classList.toggle('animate-[zoomIn_.7s_ease-out_forwards]', entries[0].isIntersecting);
                ele.style.animationDelay = (i === 0) ? '.2s' : `.${i + 4}s`;
            });
            observer.observe(ele);
        });
}
