  <!-- layout page :other content will be added to this page from other pages -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/navbar.css') }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
    <title>Document</title>
</head>
<body>
    <!-- navbar -->
     <!--this will include the navbar in all pages  -->
    @include('inc.navbar')


    <!-- content goes here -->
         <!-- content from other pages that have the @ section will be called from here  -->
@yield('homepage-content')


</body>
</html>