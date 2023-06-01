export default function () {
    document.getElementById('navbar-collapse-toggle-btn')
        .addEventListener('click', () => document.getElementById('navbar-default').classList.toggle('hidden'));
}