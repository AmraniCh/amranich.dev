/**
 * Replaces emoji shortcodes in a string with their corresponding emoji representations.
 *
 * @param {string} text - The string containing emoji shortcodes to be replaced.
 * @returns {Promise<string>} A promise that resolves to the input text with replaced emoji representations.
 */
export async function replaceEmoji(text) {
    // check if the emojis list is in local storage; fetch it only if it does not exist
    if (!localStorage.getItem('emojis')) {
        const response = await fetch('https://api.github.com/emojis');
        const emojis = await response.json();
        localStorage.setItem('emojis', JSON.stringify(emojis));
    }

    // retrieve emojis from local storage
    const emojis = JSON.parse(localStorage.getItem('emojis'));

    // extract emoji shortcodes from the input text
    const shortcodes = text.match(/:\w+:/g);

    // if no shortcodes are found, return the original string
    if (!Array.isArray(shortcodes)) {
        return text;
    }

    // replace shortcodes with corresponding emoji representations
    shortcodes.forEach((shortcode) => {
        const shortcodeWithoutColons = shortcode.slice(1, -1); // Remove colons from shortcode
        const emojiUrl = emojis[shortcodeWithoutColons];
        const imgTag = `<img class="w-4 h-4 inline" src="${emojiUrl}" alt="${shortcodeWithoutColons}" />`;
        text = text.replace(shortcode, imgTag);
    });

    return text;
}


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