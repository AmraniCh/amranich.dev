export default function () {
    const isOsDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const isStorageTheme = localStorage.theme !== undefined;
    const isStorageDark = isStorageTheme && localStorage.theme === 'dark';

    if (isStorageTheme) {
        document.documentElement.classList[isStorageDark ? 'add' : 'remove']('dark');
    } else {
        document.documentElement.classList[isOsDark ? 'add' : 'remove']('dark');
        localStorage.theme = isOsDark ? 'dark' : 'light';
    }

    // dark mode button click event handle
    Array.from(document.querySelectorAll('.dark-mode-toggle-btn')).forEach(function ($btn) {
        $btn.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
            const isDark = document.documentElement.classList.contains('dark');
            localStorage.theme = isDark ? 'dark' : 'light';
        });
    });
}