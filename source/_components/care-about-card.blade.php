  <div class="card group relative sm:w-3/5 md:basis-[47%] opacity-0 w-full">
      <span
          class="absolute top-0 left-0 mt-2 ml-2 md:mt-3 md:ml-3 h-full w-full rounded bg-yellow-200 group-hover:top-0.5 group-hover:left-0.5 group-hover:duration-200 dark:bg-brown-900 dark:group-hover:bg-brown-900">
      </span>
      <div
          class="relative h-full bg-white border border-yellow-800 rounded p-3 hover:bg-yellow-100 hover:transition-colors hover:duration-300 dark:bg-brown-900 dark:border-yellow-200 dark:group-hover:bg-dark">
          <div class="flex flex-col items-center md:items-start">
              {{ $icon }}
              <h3 class="script-font text-xl uppercase font-medium mt-1">{!! $title !!}</h3>
          </div>
          <p class="mt-3 text-sm text-center md:text-left">
              {!! $description !!}
          </p>
      </div>
  </div>
