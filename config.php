<?php

use Illuminate\Support\Str;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Translation\FileLoader;
use Illuminate\Translation\Translator;

return [
    'production' => false,
    'baseUrl' => 'http://localhost:3000',
    'local' => 'en',
    'siteName' => "Shakir El Amrani", // TODO
    'siteDescription' => 'A software developer who loves building things from scratch, coding, problem-solving, and contributing to the open source community. Enjoys continuous learning.',
    'email'  => 'contact@amranich.dev',
    'links' => [
        'github'   => 'https://github.com/amranich',
        'behance'  => 'https://www.behance.net/amranich',
        'linkedin' => 'https://www.linkedin.com/in/el-amrani-shakir/',
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
