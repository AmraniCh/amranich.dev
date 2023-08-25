export default function () {
    if (!document.querySelector('.lang-switcher-btn.selected')) {
        document.querySelector('.lang-switcher-btn[data-default="true"]').classList.add('selected');
    }
}