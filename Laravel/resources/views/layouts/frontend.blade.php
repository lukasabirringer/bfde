<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'beachfelder.de - Frontend') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
    <link href="http://beachfelder.de/_design/patternlab/public/css/beachfelder-stylesheet.css" rel="stylesheet">
<!--     <link rel="stylesheet" href="http://beachfelder.de/_design/patternlab/public/css/beachfelder-stylesheet.css"> -->
</head>
<body>
      
    <div id="app">
<div class="page">
@include('_partials.organism.topbar')
@yield('content')    
    
</div>

</div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
