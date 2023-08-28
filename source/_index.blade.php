@extends('_layouts.main')

@section('body')
    <div
        class="container bg-white max-w-7xl m-auto py-4 dark:bg-[#222] lg:py-8 rounded-lg drop-shadow-sm shadow-black h-[3000px] overflow-hidden">

        @include('_partials.hero')
        @include('_partials.about-me')
        @include('_partials.care-about')
        @include('_partials.career')

    </div>
@endsection
