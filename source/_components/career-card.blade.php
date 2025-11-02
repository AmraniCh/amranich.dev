<div {{ $attributes->merge(['class' => 'card noscript-opacity-1 group px-3 py-2.5 w-full bg-white border border-yellow-800 shadow-sm rounded opacity-0 animate-[fadeInDown_.5s_ease-out_forwards] hover:bg-yellow-100 hover:transition-colors hover:duration-300 dark:bg-brown-900 dark:border-transparent dark:hover:bg-dark dark:hover:border-yellow-200']) }}
    style="{{ $style ?? '' }}">
    <div class="flex items-center gap-3">
        <!-- Logo -->
        <img class="w-12 h-12 object-cover border border-yellow-800 rounded flex-shrink-0 transition-transform group-hover:scale-105 dark:border-transparent"
            src="{{ $logoUrl }}" alt="{!! $logoAlt !!}">
        
        <!-- Content -->
        <div class="flex-1 min-w-0">
            <h3 class="script-font text-base text-yellow lg:text-lg leading-tight capitalize">
                {!! $title !!}
            </h3>
            <p class="text-sm mt-0.5 truncate">{!! $company !!}</p>
            <div class="flex flex-wrap gap-x-2 text-xs mt-1">
                <span>📅 {!! $duration !!}</span>
                <span>•</span>
                <span> {!! $location !!}</span>
            </div>
        </div>
    </div>
</div>