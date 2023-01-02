@extends('_layouts.main')

@section('body')
    @include('/_pageContent.introduction')
    @include('/_pageContent.eventDetails')
    @include('/_pageContent.feesAndRegistration')
    @include('/_pageContent.extraInfo')

    {{-- @include('/_pageContent.slider')
    @include('/_pageContent.services')
    @include('/_pageContent.work')
    @include('/_pageContent.pricing')
    @include('/_pageContent.team')
    @include('/_pageContent.about')
    @include('/_pageContent.testimonial')
    @include('/_pageContent.facts')
    @include('/_pageContent.contact') --}}
@endsection
