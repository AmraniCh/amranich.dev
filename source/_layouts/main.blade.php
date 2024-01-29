<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

    <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}" />
    <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
    <meta property="og:url" content="/" />
    <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

    <title>{{ $page->title ?? $page->siteName }}</title>

    <link rel="home" href="{{ $page->baseUrl }}">

    <link rel="favicon" type="image/x-icon" href="/assets/icons/favicon.ico" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/icons/favicon-96x96.png" />

    <link rel="apple-touch-icon" sizes="57x57" href="/assets/icons/apple-57x57-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/icons/apple-60x60-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/icons/apple-72x72-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/icons/apple-76x76-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/icons/apple-114x114-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/icons/apple-120x120-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/icons/apple-144x144-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/icons/apple-152x152-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-180x180-touch-icon.png" />

    <link rel="icon" type="image/png" sizes="196x196" href="/assets/icons/android-chrome-196x196.png" />

    <meta name="theme-color" content="#ead59e" />

    <meta name="msapplication-TileColor" content="#ead59e" />
    <meta name="msapplication-TileImage" content="/assets/icons/windows-tile.png">
    <meta name="msapplication-square70x70logo" content="/assets/icons/windows-small-tile.png" />
    <meta name="msapplication-square150x150logo" content="/assets/icons/windows-medium-tile.png" />
    <meta name="msapplication-wide310x150logo" content="/assets/icons/windows-wide-tile.png" />
    <meta name="msapplication-square310x310logo" content="/assets/icons/windows-large-tile.png" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap">

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

</head>

<body
    class="py-2 px-2 md:py-4 md:px-4 lg:px-8 lg:py-8 font-ubuntu bg-yellow-200 text-yellow-900 dark:bg-[#231e17] dark:text-yellow-200">

    @yield('body')

    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>

    @stack('scripts')
</body>

</html>
