@extends('_layouts.main')

@section('body')
    <div
        class="container bg-yellow-50 max-w-7xl m-auto pt-4 dark:bg-[#3d3325] lg:pt-8 overflow-hidden drop-shadow-2xl dark:outline-2 dark:outline dark:outline-yellow-200">

        @include('_partials.hero')
        @include('_partials.about-me')
        @include('_partials.care-about')
        @include('_partials.career')
        @include('_partials.featured-projects')
        @include('_partials.open-source')
        @include('_partials.contact-me')
        @include('_partials.footer')

    </div>
@endsection
