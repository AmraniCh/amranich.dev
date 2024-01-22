@extends('_layouts.main')

@section('body')
    <div
        class="container bg-white max-w-7xl m-auto py-4 dark:bg-[#2e2105] lg:py-8 rounded-lg drop-shadow-sm shadow-black overflow-hidden">

        @include('_partials.hero')
        @include('_partials.about-me')
        @include('_partials.care-about')
        @include('_partials.career')
        @include('_partials.featured-projects')
        @include('_partials.open-source')
        @include('_partials.contact-me')

    </div>
@endsection
