<button type="button" class="group relative">
    <span
        class="absolute top-0 left-0 mt-1 ml-1 h-full w-full rounded bg-brown-500 group-hover:top-0.5 group-hover:left-0.5 group-hover:duration-100"></span>
    <span
        class="flex items-center gap-2 uppercase script-font fold-normal relative h-full w-full rounded border-2 border-brown-500 bg-white px-3 py-1 md:px-6 md:py-2 text-base text-brown-500 transition duration-100 hover:bg-yellow-900 hover:border-yellow-900 hover:text-yellow-50">
        {{ $slot ?? '' }}
        {{ $text ?? '' }}
    </span>
</button>
