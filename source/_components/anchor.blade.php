@php
    $isLink = isset($link) && $link;
    $link = $link ?? '';
@endphp

<a href="{{ $link ?? '#' }}" {{ $isLink ? 'target="_blank"' : '' }}
    class="group mt-6 text-sm capitalize text-yellow-800 dark:text-yellow-200 inline-flex gap-2 cursor-pointer md:float-right {{ $class ?? '' }}">
    <span
        class="font-semibold border-b-2 border-transparent hover:border-b-2 hover:border-b-yellow-500">{!! $text !!}</span>

    @if ($isLink)
        <svg class="-rotate-45 mt-0.5 fill-yellow-800 dark:fill-yellow-200 transition-transform group-hover:translate-x-[25%] group-hover:translate-y-[-25%]"
            xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
            <path
                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
        </svg>
    @endif
</a>
