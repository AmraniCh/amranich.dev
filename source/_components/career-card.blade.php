<div class="card noscript-opacity-1 group px-4 py-2 w-full bg-white border border-yellow-800 shadow-sm rounded opacity-0 animate-[fadeInDown_.5s_ease-out_forwards] hover:bg-yellow-100 hover:transition-colors hover:duration-300 dark:bg-brown-900 dark:border-yellow-200 dark:hover:bg-dark"
    style="{{ $style ?? '' }}">
    <div class="relative lg:flex lg:justify-between lg:items-center">
        <div>
            <h3 class="script-font text-xl capitalize text-yellow lg:text-2xl">
                {!! $title !!}
            </h3>
            <div class="mt-2">
                <p class="text-md max-w-[180px] md:max-w-[initial]">
                    {!! $company !!}</p>
                <p class="text-sm mt-1 max-w-[180px] md:max-w-[initial]">
                    {!! $duration !!}</p>
                <p class="text-xs mt-1 max-w-[180px] md:max-w-[initial]">
                    {!! $location !!}</p>
            </div>
        </div>
        <div class="mr-4">
            <img class="absolute right-0 bottom-0 max-w-[5rem] border border-yellow-800 rounded p-1 lg:static dark:border-yellow-200"
                src="{{ $logoUrl }}" alt="{!! $logoAlt !!}">
        </div>
    </div>
</div>
