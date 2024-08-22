@extends('layouts.front')
@section('title', 'JobNest')

@push('css')
@endpush

@section('content')

    @include('layouts.front.sections.slider')

    @include('layouts.front.sections.pop-categories')

    @include('layouts.front.sections.signup-video')

    @include('layouts.front.sections.latest-jobs')

    @include('layouts.front.sections.count-up')

    @include('layouts.front.sections.testimonial')

    @include('layouts.front.sections.latest-news')

    @include('layouts.front.sections.partners')

@endsection

@push('js')
@endpush
