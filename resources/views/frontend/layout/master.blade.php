<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('frontend/photo/logo/l.png') }}" rel="shorcut icon">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/animation.css') }}">
    <link rel="stylesheet" href="{!! asset('frontend/css/main.css') !!}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{!! asset('frontend/css/contact.css') !!}">
    <link rel="stylesheet" href="{!! asset('frontend/css/blog.css') !!}">
    <link rel="stylesheet" href="{{asset('frontend/css/servicedetail.css')}}">
    <link rel="stylesheet" href="{!! asset('frontend/css/threecolumnblog.css') !!}">
    <link rel="stylesheet" href="{!! asset('frontend/css/who-we-are.css') !!}">
    <link rel="stylesheet" href="{{asset('frontend/css/why.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/single.css') }}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/career.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/career_detail.css') }}">
    <link rel="stylesheet" href="{!! asset('frontend/css/bookservice.css') !!}">
    <link rel="stylesheet" href="{{ asset('frontend/css/price.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/pricedetail.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/button.css') }}">
    <link rel="stylesheet" href="{!! asset('frontend/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('frontend/font-awesome/css/font-awesome.min.css') !!}">
    <script src="{!! asset('frontend/js/jquery.js') !!}"></script>
    <script src="{!! asset('frontend/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('frontend/js/main.js') !!}"></script>

</head>
<body>

@include('frontend.layout.nav')

@yield('content')

@include('frontend.layout.footer')


<span id="top" onclick="scrolltotop();" class="fa fa-arrow-circle-up"></span>

{{--<script src="{!! asset('js/main.js') !!}"></script>--}}
<script src="{{asset('frontend/js/wow.min.js')}}"></script>
<script>

    new WOW().init();

</script>

</body>
</html>

@include('frontend.layout.modal')