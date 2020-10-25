<!DOCTYPE HTML>

<html>

<head>
    <meta charset="UTF-8">
    <title>Demo Website</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- <noscript> -->
    <link rel="stylesheet" href="css/skel.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style-xlarge.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <!-- </noscript> -->
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
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