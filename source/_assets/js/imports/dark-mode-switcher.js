export default function () {
    const isStorageThemeExist = localStorage.theme !== undefined;
    const isStorageThemeDark = isStorageThemeExist && localStorage.theme === 'dark';
    const isOsThemeDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

    if (isStorageThemeExist) {
        document.documentElement.classList[isStorageThemeDark ? 'add' : 'remove']('dark');
    } else {
        document.documentElement.classList[isOsThemeDark ? 'add' : 'remove']('dark');
    }

    // dark mode switchers click event handle
    Array.from(document.querySelectorAll('.dark-mode-toggle-btn')).forEach(function ($btn) {
        $btn.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
            const isDark = document.documentElement.classList.contains('dark');
            localStorage.theme = isDark ? 'dark' : 'light';
        });
    });
}