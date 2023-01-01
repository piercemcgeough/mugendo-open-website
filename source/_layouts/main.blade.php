<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">

        <title>
            {{ $page->title }}
            {{ $page->competitionYear ? "| $page->competitionYear" : '' }}
            {{ $page->subTitle ? "| $page->subTitle" : '' }}
        </title>

        @include('/_partials.styles')
        @include('/_partials.favicons')
    </head>

    <body>
        @include('/_partials.preloader')
        @include('/_partials.header')

        @yield('body')

        @include('/_partials.footer')
        @include('/_partials.scrollUp')

        @include('/_partials.javascripts')
    </body>
</html>
