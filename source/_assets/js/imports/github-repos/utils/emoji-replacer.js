/**
 * Give it a string containing an emoji shortcode and it will convert 
 * all shortcodes in the string into the corresponding emoji representation.
 */
export default async function (string) {
    // first check if the emojis list is in local storage and fetch it only if it not exist
    if (!localStorage.getItem('emojis')) {
        const res = await fetch('https://api.github.com/emojis');
        const emojis = await res.json();
        localStorage.setItem('emojis', JSON.stringify(emojis));
    }

    const emojis = JSON.parse(localStorage.getItem('emojis'));
    const shortcodes = string.match(/:\w+:/g);

    if (!Array.isArray(shortcodes)) {
        return string;
    }

    shortcodes.forEach(shortcode => {
        const shortcodeWithoutSemicolons = shortcode.split(':').join('');
        string = string.replace(shortcode, `<img class="w-4 h-4 inline" src="${emojis[shortcodeWithoutSemicolons]}" />`)
    });

    return string
}