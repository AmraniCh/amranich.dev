<!DOCTYPE html>
<html lang="{{ $page->getPath() ?: $page->local }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->description ?? $page->trans('siteDescription') }}">

    <title>{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->trans('siteName') }}</title>

    <meta name="title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->trans('siteName') }}">

    <meta name="author" content="{{ $page->author }}">

    <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->trans('siteName') }}" />
    <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
    <meta property="og:url" content="/" />
    <meta property="og:description" content="{{ $page->description ?? $page->trans('siteDescription') }}" />
    <meta property="og:image" content="{{ $page->baseUrl }}/assets/images/og-image-dark.jpg" />

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

    <meta name="theme-color" content="#f0e5cd" />

    <meta name="msapplication-TileColor" content="#f0e5cd" />
    <meta name="msapplication-TileImage" content="/assets/icons/windows-tile.png">
    <meta name="msapplication-square70x70logo" content="/assets/icons/windows-small-tile.png" />
    <meta name="msapplication-square150x150logo" content="/assets/icons/windows-medium-tile.png" />
    <meta name="msapplication-wide310x150logo" content="/assets/icons/windows-wide-tile.png" />
    <meta name="msapplication-square310x310logo" content="/assets/icons/windows-large-tile.png" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@200;300;400;500;600;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dangrek:wght@200;300;400;500;600;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200;300;400;500;600;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

    <noscript>
        <style>
            .noscript-opacity-1,
            .section {
                opacity: 1;
            }

            .hero-section {
                height: 92vh;
            }

            #navbar-default li:last-child,
            .dark-mode-toggle-btn {
                display: none
            }

            @media (min-width: 1024px) {
                #navbar-default {
                    gap: 3.9rem;
                }
            }

            @media (min-width: 1280px) {
                #navbar-default {
                    gap: 4.5rem;
                }
            }

            :target {
                animation: fadeInUp 1.5s ease;
            }

            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>
    </noscript>

    <script src="https://www.google.com/recaptcha/api.js?render=6LePjgIsAAAAAChBlEkVTlzVjXpmXFoOqPzcpUIp"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7FX66RZWQZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-7FX66RZWQZ');
    </script>


</head>

<body class="bg-yellow-50 text-yellow-800 overflow-hidden dark:bg-dark dark:text-yellow-200">
    <div id="wrapper"
        class="absolute top-0 left-0 bottom-0 right-0 overflow-auto sm:p-2 md:py-4 md:px-4 lg:px-8 lg:py-8">
        @yield('body')

        @include('_partials.projects-archive')
    </div>

    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>

    <a href="https://www.designnominees.com/sites/shakir-el-amrani-portfolio" title="Design Nominees"
        style="width:70px;height:132px;position:fixed;top:100px;left:0px;z-index:99999;text-indent:-9999px;background: url(http://www.designnominees.com/ribbons/designnominees-ribbon-sotd-black-left.png) no-repeat;"
        target="_blank">
        Design Nominees
    </a>

    <div id="TopDesignKing" style="position: fixed; z-index: 999;bottom:20px; left:20px;">
        <a href="https://topdesignking.com/website/3286/amranich-portfolio" target="_blank">
            <img src="https://topdesignking.com/public/images/ribbon-neon.png" alt="TopDesignKing" />
        </a>
    </div>


    @stack('scripts')
</body>

</html>
