<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    @include('header.head')
</head>
<body>
<header id="header" class="">
    @include('header.header')
</header>
<section>
    @include('errors.errmsg')
    @yield('body')
</section>
@include('footer.footer')
@include('footer.foot_script')
</body>
</html>
