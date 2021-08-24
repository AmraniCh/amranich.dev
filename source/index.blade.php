@extends('_layouts.main')

@section('body')
<div class="flex flex-col justify-center items-center text-black select-none">
    <img class="w-24 sm:absolute sm:top-8 sm:left-8" src="assets/images/logo.png" alt="El Amrani Chakir">
    <img class="rounded-full mt-6 mb-4 w-40" src="assets/images/me.png" alt="El Amrani Chakir">
    <h1 class="text-2xl">amranich.dev</h1>
    <p class="text-4xl py-2 font-medium text-brown sm:text-6xl sm:pt-2">I am almost there!</p>
    <div class="py-2 flex flex-col align-start sm:flex-row sm:space-x-12 sm:pt-2">
        <a class="tracking-widest-x2" href="{{ $page->links->github }}" target="blank">GitHub 
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block bounce-rigth-animation" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
        <a class="tracking-widest-x2" href="{{ $page->links->behance }}" target="blank">Behance 
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block bounce-rigth-animation" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
    </div>
</div>
<span class="absolute text-sm bottom-4 right-4 tracking-widest-x2 sm:right-8">{{ $page->email }}</span>
@endsection
