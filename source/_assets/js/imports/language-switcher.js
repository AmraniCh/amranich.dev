export default function () {
    const $selectedLangBtn = document.querySelector('.lang-switcher-btn.selected');
    if ($selectedLangBtn === null) {
        document.querySelector('.lang-switcher-btn[data-default="true"]').classList.add('selected');
    }
}