<!DOCTYPE html>
<html lang="{{ $page->getPath() ?: $page->local }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ $page->trans('not-found-page.title') . ' | ' }}{{ $page->trans('siteName') }}</title>

    <link rel="home" href="{{ $page->baseUrl }}">

    <link rel="favicon" type="image/x-icon" href="/assets/icons/favicon.ico" />
    <link rel="icon" type="image/png" sizes="196x196" href="/assets/icons/android-chrome-196x196.png" />

    <meta name="theme-color" content="#f0e5cd" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@200;300;400;500;600;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>

<body>
    @yield('body')

    <script>
        const isStorageThemeExist = localStorage.theme !== undefined;
        const isStorageThemeDark = isStorageThemeExist && localStorage.theme === 'dark';
        const isOsThemeDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

        if (isStorageThemeExist) {
            document.documentElement.classList[isStorageThemeDark ? 'add' : 'remove']('dark');
        } else {
            document.documentElement.classList[isOsThemeDark ? 'add' : 'remove']('dark');
        }
    </script>
</body>

</html>
