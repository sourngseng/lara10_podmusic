<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title','Home Page Pod Music')</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('pod_talk')}}/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('pod_talk')}}/css/bootstrap-icons.css">

    <link rel="stylesheet" href="{{asset('pod_talk')}}/css/owl.carousel.min.css">

    <link rel="stylesheet" href="{{asset('pod_talk')}}/css/owl.theme.default.min.css">

    <link href="{{asset('pod_talk')}}/css/templatemo-pod-talk.css" rel="stylesheet">


    @stack('custom_css')
</head>

<body>

    <main>
        @include('Frontend.partials.navbar')

        @yield('content')
    </main>


    @include('Frontend.partials.footer')


    <!-- JAVASCRIPT FILES -->
    <script src="{{asset('pod_talk')}}/js/jquery.min.js"></script>
    <script src="{{asset('pod_talk')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('pod_talk')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('pod_talk')}}/js/custom.js"></script>

    @stack('custom_js')

</body>

</html>
