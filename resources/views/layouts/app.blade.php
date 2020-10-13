<!DOCTYPE HTML>

<html>

<head>
    <title>Demo CV</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">

    <div id="app">
        @auth
        @include('layouts.header.nav')
        @else
        @include('layouts.header.navguest')
        @endauth
        @yield('content')
        @include('layouts.footer.footer')
    </div>

</body>

</html>