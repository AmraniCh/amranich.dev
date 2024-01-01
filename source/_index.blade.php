@extends('_layouts.app-down')

@section('body')
    <div class="bg-yellow p-2 sm:p-8 h-full">
        <div class="bg-glass bg-no-repeat bg-fit flex justify-center items-center h-full relative rounded-2xl drop-shadow-md">
            <div class="flex flex-col justify-center items-center text-yellow-900">
                <img class="w-24 mb-4 select-none sm:mb-0 sm:absolute sm:top-8 sm:left-8 sm:w-28" src="assets/images/logo.svg" alt="El Amrani Chakir">
                <img class="rounded-full mb-2 w-44" src="/assets/images/me.png" alt="El Amrani Chakir">
                <h1 class="text-xl tracking-wider sm:text-3xl">amranich.dev</h1>
                <p class="text-3xl py-3 font-bold text-brown text-center tracking-widest sm:text-6xl sm:py-6">COMING SOON..</p>
                <div class="flex flex-col align-start sm:flex-row sm:space-x-12">
                    <a class="flex items-center gap-2 tracking-widest-x2 text-sm font-medium" href="{{ $page->links->github }}" target="blank">
                        <svg class="w-4 h-4 fill-yellow text-yellow"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                        </svg>
                        
                        GitHub       
                    </a>

                    <a class="flex items-center gap-2 tracking-widest-x2 text-sm font-medium" href="{{ $page->links->linkedin }}" target="blank">
                        <svg class="w-4 h-4 fill-yellow text-yellow inline-block"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                        </svg>
                        Linkedin
                    </a>

                    <a class="flex items-center gap-2 tracking-widest-x2 text-sm font-medium" href="{{ $page->links->behance }}" target="blank">
                        <svg class="w-4 h-4 fill-yellow text-yellow inline-block"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                        </svg>     
                        Behance
                    </a>
                </div>
            </div>
            <span class="absolute text-sm bottom-4 tracking-widest-x2 font-medium lg:bottom-6 sm:right-8">{{ $page->email }}</span>
        </div>
    </div>
@endsection
