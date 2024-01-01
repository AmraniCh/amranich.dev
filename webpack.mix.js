const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    // .css('source/_assets/css/main.css', 'css/main.css', [
    //     require('postcss-import'),
    //     require('tailwindcss'),
    // ])
    .css('source/_assets/css/app-down.css', 'css/app-down.css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .options({
        processCssUrls: false,
    })
    .browserSync({
        server: 'build_local',
        files: ['build_*/**'],
    })
    .version();
