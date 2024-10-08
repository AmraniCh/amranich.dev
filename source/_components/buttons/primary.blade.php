@if (isset($href) && $href)
    <a href="{{ $href }}" @if ($target) target="{{ $target }}" @endif>
@endif

<button type="{{ isset($submit) ? 'submit' : 'button' }}" class="group relative primary-btn">
    <span
        class="absolute top-0 left-0 mt-1 ml-1 h-full w-full rounded bg-yellow-900 group-hover:top-0.5 group-hover:left-0.5 group-hover:duration-100 dark:bg-dark dark:border-2 dark:border-yellow-200"></span>
    <span
        class="flex justify-center items-center gap-2 uppercase font-bold relative h-full w-full rounded bg-yellow-800 px-3 py-1 md:px-6 md:py-2 text-base text-white transition duration-100 dark:bg-yellow-200 dark:text-yellow-900 dark:border-none">

        <svg class="spinner hidden w-4 h-4 me-2 text-white animate-spin" aria-hidden="true" role="status"
            viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="fill-white "
                d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" />
            <path class="fill-yellow-800"
                d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" />
        </svg>

        {{ $slot ?? '' }}
        {{ $text ?? '' }}
    </span>
</button>

@if (isset($href) && $href)
    </a>
@endif
