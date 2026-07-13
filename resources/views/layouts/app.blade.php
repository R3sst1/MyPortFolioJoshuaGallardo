<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO --}}
    <title>@yield('title', 'Joshua Gallardo | Software Developer')</title>
    <meta name="description"
        content="Joshua Gallardo - BSIT Graduate and Laravel Full-Stack Developer specializing in modern web applications.">
    <meta name="author" content="Joshua Gallardo">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    {{-- Google Fonts (Optional if you're using one) --}}
    {{--
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}

    {{-- Phosphor Icons --}}
    <link rel="stylesheet" href="https://unpkg.com/@phosphor-icons/web@2.1.1/src/regular/style.css">

    {{-- Assets --}}
    @vite(['resources/css/portfolio.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body class="bg-background text-foreground transition-colors duration-500 @yield('body-class')">

    @yield('content')

    {{-- Global Components --}}
    @include('partials.cursor')

    @stack('scripts')

</body>

</html>