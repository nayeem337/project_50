<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.themefisher.com/biztrox/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Mar 2022 08:06:20 GMT -->
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>


    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   @include('front.includes.css')
</head>

<body>


<!-- preloader start -->
<div class="preloader">
    <img src="{{asset('/')}}front/images/preloader.gif" alt="preloader">
</div>
<!-- preloader end -->

@include('front.includes.header')

@yield('body')

@include('front.includes.footer')

@include('front.includes.js')

</body>

<!-- Mirrored from demo.themefisher.com/biztrox/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Mar 2022 08:06:55 GMT -->
</html>
