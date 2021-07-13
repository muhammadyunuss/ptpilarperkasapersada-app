<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="{{ asset('front') }}/assets/images/favicon.png" sizes="35x35" type="image/png">
    <title>PT PILAR PERKASA PERDANA</title>

    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/fontello.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/nouislider.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/responsive.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/color.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @include('layouts.header')

    @include('layouts.sidebar')

    @yield('content')

    @include('layouts.footer')

</div>
<!-- ./wrapper -->

<script src="{{ asset('front') }}/assets/js/jquery.min.js"></script>
<script src="{{ asset('front') }}/assets/js/popper.min.js"></script>
<script src="{{ asset('front') }}/assets/js/bootstrap.min.js"></script>
<script src="{{ asset('front') }}/assets/js/wow.min.js"></script>
<script src="{{ asset('front') }}/assets/js/counterup.min.js"></script>
<script src="{{ asset('front') }}/assets/js/jquery.fancybox.min.js"></script>
<script src="{{ asset('front') }}/assets/js/jquery.bootstrap-touchspin.min.js"></script>
<script src="{{ asset('front') }}/assets/js/nouislider.min.js"></script>
<script src="{{ asset('front') }}/assets/js/perfect-scrollbar.min.js"></script>
<script src="{{ asset('front') }}/assets/js/slick.min.js"></script>
<script src="{{ asset('front') }}/assets/js/custom-scripts.js"></script>
@stack('scripts')
</body>
</html>
