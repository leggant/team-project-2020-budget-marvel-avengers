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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <title>Otago Polytech</title>
</head>
<body>
    
    <!-- navbar -->
     <!--this will include the navbar in all pages  -->
 @include('inc.navbar')

<main>
    <!-- content goes here -->
    <!-- content from other pages that have the @ section will be called from here  -->
@yield('homepage-content')
</main>
@include('inc.footer')
</body>
</html>
