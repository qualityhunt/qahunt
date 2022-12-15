<!DOCTYPE html>
<html lang="TR">

<!-- Mirrored from rstheme.com/products/html/reobiz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 08:34:31 GMT -->

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>@yield('title', GeneralSiteSettings('site_title') )</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('css')

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/font-awesome.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/animate.css')}}">
    <!-- aos css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/aos.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/owl.carousel.css')}}">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/slick.css')}}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/off-canvas.css')}}">
    <!-- linea-font css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/fonts/linea-fonts.css')}}">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/fonts/flaticon.css')}}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/rsmenu-main.css')}}">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/inc/custom-slider/css/nivo-slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/inc/custom-slider/css/preview.css')}}">
    <!-- rsmenu transitions css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/rsmenu-transitions.css')}}">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/rs-spacing.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/style.css')}}">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/responsive.css')}}">


    @yield('meta')
    @section('head')
    @endsection
</head>





@include('frontend.includes.header')
@include('includes.partials.logged-in-as')

@include('includes.partials.messages')
@yield('content')
@include('includes.partials.ga')
</div>
@include('frontend.includes.footer')

</div>
@yield('js')
</body>

</html>