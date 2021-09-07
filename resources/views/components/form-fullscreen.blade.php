<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'EcoTruck' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/themestrap.css') }}"><!-- color chages to bootstrap -->

	<!-- mobile responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<link rel="stylesheet" href="{{asset('_ecogreen/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('_ecogreen/css/responsive.css')}}">

<!-- moved @import section from _ecogreen/css/style.css - START -->
<link rel="stylesheet" href="{{asset('_ecogreen/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('_ecogreen/css/bootstrap-select.min.css')}}">
<link rel="stylesheet" href="{{asset('_ecogreen/css/jquery.bootstrap-touchspin.css')}}">

<link rel="stylesheet" href="{{asset('_ecogreen/css/font-awesome.css')}}">
<link rel="stylesheet" href="{{asset('_ecogreen/css/icomoon.css')}}">

<link rel="stylesheet" href="{{asset('_ecogreen/css/settings.css')}}">
<link rel="stylesheet" href="{{asset('_ecogreen/css/layers.css')}}">
<link rel="stylesheet" href="{{asset('_ecogreen/css/navigation.css')}}">

<link rel="stylesheet" href="{{asset('_ecogreen/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('_ecogreen/css/jquery.bxslider.css')}}">
<link rel="stylesheet" href="{{asset('_ecogreen/css/flexslider.css')}}">

<link rel="stylesheet" href="{{asset('_ecogreen/css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{asset('_ecogreen/css/jquery-ui.theme.css')}}">
<link rel="stylesheet" href="{{asset('_ecogreen/css/jquery.fancybox.css')}}">
<link rel="stylesheet" href="{{asset('_ecogreen/css/polyglot-language-switcher.css')}}">

<link rel="stylesheet" href="{{asset('_ecogreen/css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('_ecogreen/css/nouislider.css')}}">
<link rel="stylesheet" href="{{asset('_ecogreen/css/nouislider.pips.css')}}">
<link rel="stylesheet" href="{{asset('_ecogreen/css/menu.css')}}">
<link rel="stylesheet" href="{{asset('_ecogreen/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('_ecogreen/css/imagehover.min.css')}}">
<link rel="stylesheet" href="{{asset('_ecogreen/css/player.css')}}">
<!-- moved @import section from _ecogreen/css/style.css - END -->

	<link rel="apple-touch-icon" href="{{asset('_ecogreen/images/fav-icon/apple-touch-icon.png')}}" sizes="180x180">
	<link rel="icon" type="image/png" href="{{asset('_ecogreen/images/fav-icon/favicon-32x32.png')}}" sizes="32x32">
	<link rel="icon" type="image/png" href="{{asset('_ecogreen/images/fav-icon/favicon-16x16.png')}}" sizes="16x16">

	<script src="{{asset('_ecogreen/js/jquery.js')}}"></script>
	<script src="{{asset('_ecogreen/js/pie-chart.js')}}"></script>

	<script src="{{asset('_ecogreen/js/jquery-ui.js')}}"></script>
	<script src="{{asset('_ecogreen/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('_ecogreen/js/custom.js')}}"></script>
    <!-- mobile responsive meta  from Theme -->

    {{ $css ?? '' }}
    <link rel="stylesheet" href="{{asset('css/_theme_menu.css')}}">
    {{ $headerScript ?? '' }}
</head>
<body>
    <div class="box-wrapper">


        <section class="theme_menu_ecotruck stricky">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="main-logo_ecotruck">
                            <a href="{{ route('homepage') }}"><img src="{{asset('images/logo_large.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <nav class="menuzord menuzord-responsive" id="main_menu">
                            <a href="javascript:void(0)" class="showhide" style="display: none;"></a>
                        <ul class="menuzord-menu menuzord-indented scrollable" style="max-height: 400px; display: block;">
                             <li><a href="{{ route('homepage')}}">Home</a></li>
                             <li><a href="{{ route('aboutus')}}">About us</a></li>
                             <li><a href="{{ route('contact')}}">Contact</a></li>

                         <li class="scrollable-fix"></li></ul>
                     </nav>
                    </div>
                    <div class="col-md-3 login_ecotruck">
                        @if (!Auth::guest())
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="thm-btn style-4">{{ __('Log Out') }}</button>
                        </form>
                        @else
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <button type="submit" class="thm-btn style-4">{{ __('Log In') }}</button>
                        </form>
                        @endif
                    </div>


                </div>


           </div>
        </section>

        <div class="container g-5 my-5">
            <div class="row g-5 justify-content-md-center">
                <div class="col-sm p-3 bg-primary col-md-8 col-lg-6">
                    {{ $content }}
                </div>
            </div>
        </div>
        <div class="border-bottom"></div>
        <section class="call-out">
            <div class="container">
                <div class="float_left">
                    <h4>Join Our Mission to reduce CO&sup2; emision on our roads.</h4>
                </div>
            </div>
        </section>
        <footer class="main-footer">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="container">
                    <div class="row">
                        <!--Big Column-->
                        <div class="big-column col-md-12 col-sm-12 col-xs-12">
                            <div class="row clearfix">
                                <!--Footer Column-->
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="footer-widget about-column">
                                        <figure class="footer-logo"><a href="index.html"><img src="{{asset('images/logo_large.png')}}" alt=""></a></figure>
                                        <div class="text"><p>Do not hessitate to contact us. </p> </div>
                                        <ul class="contact-info">
                                            <li><span class="icon-signs"></span>123 Rue de Rock'n'Roll <br>2322 - Belval</li>
                                            <li><span class="icon-phone-call"></span> Phone: +123-456-7890</li>
                                            <li><span class="icon-note"></span>Supportus@ecotruck.lu</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer Bottom-->
        <section class="footer-bottom">
            <div class="container">
                <div class="pull-left copy-text">
                    <p>Copyrights© 2021 - All Rights Reserved</p>
                </div><!-- /.pull-right -->
            </div><!-- /.container -->
        </section>
        <!-- Scroll Top  -->
        <button class="scroll-top tran3s color2_bg"><span class="fa fa-angle-up"></span></button>
        <!-- preloader  -->
        <div class="preloader"></div>


    </div><!-- box-wrapper  -->


<!-- jQuery -->
<script src="{{asset('_ecogreen/js/jquery.js')}}"></script>
<script src="{{asset('_ecogreen/js/bootstrap.min.js')}}"></script>
<script src="{{asset('_ecogreen/js/menu.js')}}"></script>
<script src="{{asset('_ecogreen/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('_ecogreen/js/jquery.mixitup.min.js')}}"></script>
<script src="{{asset('_ecogreen/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('_ecogreen/js/imagezoom.js')}}"></script>
<script src="{{asset('_ecogreen/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('_ecogreen/js/jquery.polyglot.language.switcher.js')}}"></script>
<script src="{{asset('_ecogreen/js/SmoothScroll.js')}}"></script>
<script src="{{asset('_ecogreen/js/jquery.appear.js')}}"></script>
<script src="{{asset('_ecogreen/js/jquery.countTo.js')}}"></script>
<script src="{{asset('_ecogreen/js/validation.js')}}"></script>
<script src="{{asset('_ecogreen/js/wow.js')}}"></script>
<script src="{{asset('_ecogreen/js/jquery.fitvids.js')}}"></script>
<script src="{{asset('_ecogreen/js/nouislider.js')}}"></script>
<script src="{{asset('_ecogreen/js/isotope.js')}}"></script>
<script src="{{asset('_ecogreen/js/pie-chart.js')}}"></script>


<!-- revolution slider js -->
<script src="{{asset('_ecogreen/js/rev-slider/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('_ecogreen/js/rev-slider/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('_ecogreen/js/rev-slider/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('_ecogreen/js/rev-slider/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('_ecogreen/js/rev-slider/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('_ecogreen/js/rev-slider/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('_ecogreen/js/rev-slider/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('_ecogreen/js/rev-slider/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('_ecogreen/js/rev-slider/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('_ecogreen/js/rev-slider/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('_ecogreen/js/rev-slider/revolution.extension.video.min.js')}}"></script>


<script src="{{asset('_ecogreen/js/custom.js')}}"></script>
</body>
</html>
