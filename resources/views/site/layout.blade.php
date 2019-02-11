<!doctype html>
<!--[if IE 9 ]>
<html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en"><!--<![endif]-->
<head>
    <title>Sirius Personalize {{$layout['title']}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--meta info-->
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" type="image/ico" href="images/fav.ico">
    <!--stylesheet include-->
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('assets/css/camera.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('assets/css/owl.transitions.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('assets/css/jquery.custom-scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('assets/css/style.css')}}">
    <!--font include-->
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <script src="{{asset('assets/js/modernizr.js')}}"></script>
    @if(\Route::getCurrentRoute()->getName() == 'site.product.view')

            <!--stylesheet include-->
            <link rel="stylesheet" type="text/css" media="all" href="{{asset('assets/css/jquery.fancybox-1.3.4.css')}}">
            <link rel="stylesheet" type="text/css" media="all" href="{{asset('assets/css/jquery.custom-scrollbar.css')}}">
            <link rel="stylesheet" type="text/css" media="all" href="{{asset('assets/css/owl.carousel.css')}}">
    @endif
</head>

<body>
<!--boxed layout-->
<div class="boxed_layout relative w_xs_auto">
    <!--[if (lt IE 9) | IE 9]>
    <div style="background:#fff;padding:8px 0 10px;">
        <div class="container" style="width:1170px;">
            <div class="row wrapper">
                <div class="clearfix" style="padding:9px 0 0;float:left;width:83%;"><i
                        class="fa fa-exclamation-triangle scheme_color f_left m_right_10"
                        style="font-size:25px;color:#e74c3c;"></i><b style="color:#e74c3c;">Attention! This page may not
                    display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster,
                    safer browsing experience.</b></div>
                <div class="t_align_r" style="float:left;width:16%;"><a
                        href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"
                        class="button_type_4 r_corners bg_scheme_color color_light d_inline_b t_align_c" target="_blank"
                        style="margin-bottom:2px;">Update Now!</a></div>
            </div>
        </div>
    </div>
    <![endif]-->
    <!--markup header-->
@include('site.layout._topmenu')

@yield('content')

<!--markup footer-->
    @include('site.layout._footer')

</div>
<!--social widgets-->
<ul class="social_widgets d_xs_none">
    <!--facebook-->
    <li class="relative">
        <button class="sw_button t_align_c facebook"><i class="fa fa-facebook"></i></button>
        <div class="sw_content">
            <h3 class="color_dark m_bottom_20">Join Us on Facebook</h3>
            <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;width=235&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=438889712801266"
                    style="border:none; overflow:hidden; width:235px; height:258px;"></iframe>
        </div>
    </li>
    <!--twitter feed-->
    <li class="relative">
        <button class="sw_button t_align_c twitter"><i class="fa fa-twitter"></i></button>
        <div class="sw_content">
            <h3 class="color_dark m_bottom_20">Latest Tweets</h3>
            <div class="twitterfeed m_bottom_25"></div>
            <a role="button" class="button_type_4 d_inline_b r_corners tr_all_hover color_light tw_color"
               href="https://twitter.com/fanfbmltemplate">Follow on Twitter</a>
        </div>
    </li>

</ul>



<button class="t_align_c r_corners tr_all_hover animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
<!--scripts include-->
<script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/retina.js')}}"></script>
<script src="{{asset('assets/js/elevatezoom.min.js')}}"></script>
<script src="{{asset('assets/js/camera.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.tweet.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.fancybox-1.3.4.js')}}"></script>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
<script src="{{asset('assets/js/jquery.custom-scrollbar.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
{{--<script src="{{asset('assets/js/addthis_widget.js')}}"></script>--}}

</body>
</html>