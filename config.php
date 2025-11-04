<?php

use Illuminate\Support\Str;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Translation\FileLoader;
use Illuminate\Translation\Translator;

return [

    'production' => false,

    'baseUrl' => 'http://localhost:3000',

    'local' => 'en',

    'author' => "Shakir El Amrani",

    'email'  => 'contact@amranich.dev',

    'docUrl' => 'https://doc.amranich.dev',

    'changeLogUrl' => 'https://github.com/AmraniCh/amranich.dev/blob/master/CHANGELOG.md',

    'links' => [
        'github'   => 'https://github.com/amranich',
        'behance'  => 'https://www.behance.net/amranich',
        'linkedin' => 'https://www.linkedin.com/in/amranich',
    ],

    // helpers
    'trans' => function ($page, $key, $locale = null) {
        if (!$locale) {
            $locale = $page->locale;
        }

        $loader     = new FileLoader(new Filesystem(), __DIR__ . '/lang');
        $translator = new Translator($loader, $locale);

        return $translator->get($key);
    },

    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'selected' : '';
    },

];
