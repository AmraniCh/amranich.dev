
/**
 * A helper function that utilizes the Intersection Observer API to toggle animation classes 
 * on elements based on their visibility within the viewport.
 * 
 * @param {HTMLElement|NodeList} element - The element or NodeList of elements to observe for visibility changes.
 * @param {string} animationClass - The CSS class to toggle on the elements when they become visible or invisible.
 * @param {IntersectionObserverInit} [options={}] - Additional options to configure the Intersection Observer.
 * @throws {Error} Throws an error if the 'element' parameter is neither a NodeList nor an HTMLElement.
 */
export function animateOnVisibility({ element, animationClass, options = {} }) {
    var elements = [];

    if (element instanceof NodeList) {
        elements = Array.from(element);
    } else if (element instanceof HTMLElement) {
        elements.push(element)
    } else {
        throw new Error(`animateOnVisibility function accepts a NodeList or an HTMLElement.`);
    }

    elements.forEach((ele) => {
        (new IntersectionObserver((entries) => {
            ele.classList.toggle(animationClass, entries[0].isIntersecting);
        }, options)).observe(ele);
    });
}