<div class="group relative inline-block{{ $hideOnDesktop ? ' lg:hidden' : '' }}">

    <x-badge text="{{ $level }}">
        <svg class="w-3 h-3 fill-yellow-50 group-hover:fill-brown-900" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512">
            <path
                d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
        </svg>

    </x-badge>

    <div
        class="absolute -top-5 left-1/2 -translate-x-[30%] -translate-y-full w-max max-w-xs md:max-w-sm px-5 py-2 bg-brown-900 text-white rounded hidden shadow-lg whitespace-normal group-hover:block dark:bg-brown-800">


        @if (!$tasks->isEmpty())
            <h3>Tasks:</h3>
            <ul class="ml-2 list-disc dark:list-[circle]">

                @foreach ($tasks as $task)
                    <li><span class="text-sm">{!! $task !!}</span></li>
                @endforeach

            </ul>
        @else
            <p class="text-sm">{!! $description !!}</p>
        @endif

        <i
            class="absolute top-full left-[30%] -ml-4 w-7 h-4 overflow-hidden after:content-[\'\'] after:absolute after:w-4 after:h-4 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rotate-45 after:bg-brown-900 after:shadow-lg"></i>
    </div>
</div>
