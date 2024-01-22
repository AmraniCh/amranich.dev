<button type="button"
    class="flex gap-1 items-center bg-transparent text-center text-inherit font-light py-1 px-2 lowercase border-2 rounded-md border-yellow-400 hover:opacity-75 active:opacity-100">
    {{ $slot ?? '' }}
    {{ $text ?? '' }}
</button>
