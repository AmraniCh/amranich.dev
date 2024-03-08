<div class="card group px-4 py-2 w-full bg-white border-2 border-yellow-900 shadow-sm rounded opacity-0 hover:bg-yellow-100 hover:transition-colors hover:duration-300 dark:bg-[#fff8e1] dark:hover:bg-white"
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
            <img class="absolute right-0 bottom-0 max-w-[5rem] border border-yellow-900 rounded p-1 lg:static"
                src="{{ $logoUrl }}" alt="{!! $logoAlt !!}">
        </div>
    </div>
</div>
