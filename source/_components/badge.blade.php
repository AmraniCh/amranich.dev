@props(['text' => $text, 'title' => ''])

<span
    {{ $attributes->merge([
        'class' =>
            ($slot->isNotEmpty() ? 'flex justify-center items-center gap-1' : 'inline-block') .
            ' badge bg-yellow-800 text-white text-xs text-center whitespace-nowrap font-medium px-2 py-0.5 rounded border border-transparent
                         hover:bg-transparent hover:border hover:border-yellow-800 hover:text-inherit
                         dark:bg-transparent dark:text-yellow-200 dark:border dark:border-yellow-200 dark:hover:bg-yellow-200 dark:hover:text-yellow-900',
    ]) }}
    title="{{ $title }}">
    {{ $slot }}
    {{ $text }}
</span>
