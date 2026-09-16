export default function () {
    const isStorageThemeExist = localStorage.theme !== undefined;
    const isStorageThemeDark = isStorageThemeExist && localStorage.theme === 'dark';
    const isOsThemeDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

    if (isStorageThemeExist) {
        document.documentElement.classList[isStorageThemeDark ? 'add' : 'remove']('dark');
    } else {
        document.documentElement.classList[isOsThemeDark ? 'add' : 'remove']('dark');
    }

    Array.from(document.querySelectorAll('.dark-mode-toggle-btn')).forEach(function ($btn) {
        $btn.addEventListener('click', (e) => {
            const rect = $btn.getBoundingClientRect();
            const x = rect.left + rect.width / 2;
            const y = rect.top + rect.height / 2;

            const endRadius = Math.hypot(
                Math.max(x, window.innerWidth - x),
                Math.max(y, window.innerHeight - y)
            );

            if (document.startViewTransition) {
                const transition = document.startViewTransition(() => {
                    document.documentElement.classList.toggle('dark');
                    localStorage.theme = document.documentElement.classList.contains('dark') ? 'dark' : 'light';
                });

                transition.ready.then(() => {
                    document.documentElement.animate(
                        { clipPath: [
                            `circle(0px at ${x}px ${y}px)`,
                            `circle(${endRadius}px at ${x}px ${y}px)`
                        ]},
                        { duration: 600, easing: 'cubic-bezier(0.4, 0, 0.2, 1)', pseudoElement: '::view-transition-new(root)' }
                    );
                });
            } else {
                document.documentElement.classList.toggle('dark');
                localStorage.theme = document.documentElement.classList.contains('dark') ? 'dark' : 'light';
            }
        });
    });
}