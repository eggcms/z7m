<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="apple-mobile-web-app-title" content="title">
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link href="/asset/css/style.css" rel="stylesheet"/>
        <link href="https://vjs.zencdn.net/7.5.5/video-js.css" rel="stylesheet" />
        <link href="{{url('asset/css/vision_step.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Kanit:200,400,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <header>
            @include('component.header')
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            @include('component.footer')
        </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{ url('ztvapi/libary/acvdy2a8io.js') }}"></script>
    <script type="text/javascript" src="{{ url('jwplayer/jwplayer.js') }}"></script>
    <script type="text/javascript" src="{{ url('ztvapi/libary/mpvyui3xe.js') }}"></script>
    <script>
        createPlayer("truesport2", "myVideo", "true", "100%", "{{url('images/logo-chnnal.png')}}", "top-right");
    </script>
    </html>
