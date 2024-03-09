@extends('_layouts.main')

@section('body')
    <div
        class="container relative bg-yellow-50 max-w-7xl m-auto pt-4 shadow-xl dark:bg-[#3d3325] lg:pt-8 dark:outline-2 dark:outline dark:outline-yellow-200">

        @include('_partials.hero')
        @include('_partials.about-me')
        @include('_partials.care-about')
        @include('_partials.career')
        @include('_partials.featured-projects')
        @include('_partials.open-source')
        @include('_partials.contact-me')
        @include('_partials.footer')

        <div id="scrollIndicators"></div>
    </div>
@endsection
