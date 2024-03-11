<button type="button" class="group relative">
    <span
        class="absolute top-0 left-0 mt-1 ml-1 h-full w-full rounded bg-brown-400 group-hover:top-0.5 group-hover:left-0.5 group-hover:duration-100 group-hover:bg-yellow-900 dark:bg-dark dark:border-2 dark:border-yellow-200 dark:group-hover:bg-dark"></span>
    <span
        class="flex items-center gap-2 uppercase script-font fold-normal relative h-full w-full rounded border-2 border-brown-400 bg-yellow-50 px-3 py-1 md:px-6 md:py-2 text-base text-brown-400 transition duration-100 hover:bg-yellow-800 hover:border-yellow-800 hover:text-yellow-50 dark:text-yellow-200 dark:bg-dark dark:border-yellow-200 dark:group-hover:bg-yellow-200 dark:group-hover:text-yellow-900">
        {{ $slot ?? '' }}
        {{ $text ?? '' }}
    </span>
</button>
