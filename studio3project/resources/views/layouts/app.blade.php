<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>@yield('title','Otago Polytech - Studio Management Portal')</title>
    </head>
    <body>
    @include('includes.navbar')
        <main class="container">
            @yield('content')
        </main>
    @include('includes.footer')
    </body>
</html>
