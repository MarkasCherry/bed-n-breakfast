<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title'){{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png') }}"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet">

@stack('styles_before')
<!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ mix('assets/libraries/css/notyf/notyf.min.css') }}">

    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/star-rating.css') }}"/>
    <link href="{{ asset('assets/css/navigation.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/mobiscroll.jquery.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/star-rating.css') }}"/>

@stack('styles_after')


    @livewireStyles

</head>

<body>

@include('layouts.header.navigation')
@yield('content')

@stack('modals')

@livewireScripts

<!-- Scripts -->
<script src="{{ mix('assets/libraries/js/notyf/notyf.min.js') }}"></script>
<script src="{{ mix('assets/js/app.js') }}" defer></script>

<script src="{{ asset('assets/libraries/js/app.js') }}"></script>
<script src="{{ asset('assets/libraries/js/functions.js') }}"></script>
<script src="{{ asset('assets/libraries/js/main.js') }}"></script>
<script src="{{ asset('assets/js/carousel.js') }}"></script>
<script src="{{ asset('assets/js/navigation.js') }}"></script>
<script src="{{ asset('assets/js/mobiscroll.jquery.min.js') }}"></script>

@stack('scripts')

</body>
</html>
