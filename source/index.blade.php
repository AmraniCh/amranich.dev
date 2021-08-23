@extends('_layouts.main')

@section('body')
{{-- <img class="absolute top-28 left-2/4 transform -translate-x-2/4 w-24 h-24" src="assets/images/logo.png"> --}}

<div class="flex flex-col justify-center items-center text-black">
    <img class="w-24 h-24" src="assets/images/logo.png">
    <img class="rounded-full mt-6 mb-4 w-48 h-48" src="assets/images/me.png">
    <h1 class="text-2xl font-medium">amranich.dev</h1>
    <p class="text-4xl py-2 font-medium text-brown">I am almost there!</p>
    <div class="py-2 flex flex-col align-start">
        <a class="tracking-widest-x2" href="{{ $page->links->github }}">GitHub 
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
        <a class="tracking-widest-x2" href="{{ $page->links->behance }}">Behance 
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
    </div>
</div>

<span class="absolute bottom-5 tracking-widest-x2">{{ $page->email }}</span>
@endsection
