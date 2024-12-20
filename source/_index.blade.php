@extends('_layouts.main')

@section('body')
    <div class="container relative bg-yellow-50 max-w-7xl m-auto pt-4 rounded-b-xl overflow-hidden lg:pt-0 dark:bg-dark">

        @include('_partials.hero')
        @include('_partials.about-me')
        @include('_partials.care-about')
        @include('_partials.career')
        @include('_partials.featured-projects')
        @include('_partials.open-source')
        @include('_partials.contact-me')
        @include('_partials.footer')

        <div id="scroll-spy-indicators"></div>
    </div>
@endsection
