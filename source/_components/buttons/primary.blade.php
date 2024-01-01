<button type="button"
    class="flex items-center bg-yellow-400 text-white py-2 px-3 rounded-md shadow-lg capitalize  hover:opacity-75 active:opacity-100">
    {{ $slot ?? '' }}
    {{ $text ?? '' }}
</button>
