<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Eco Green || Responsive HTML 5 Template</title>

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

</head>
<body>

<div class="boxed_wrapper">


<section class="theme_menu stricky">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="main-logo">
                    <a href="index.html"><img src="{{asset('images/logo_large.png')}}" alt=""></a>
                </div>
            </div>
            <div class="float_right">
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




<section class="service sec-padd3">
    <div class="container">
        <div class="section-title center">
            <h2>We are ECO Green, Our Mission is <span class="thm-color">save water, animals and environment</span>our activities are taken around the world.</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-x-12">
                <div class="service-item center">
                    <div class="icon-box">
                        <span class="icon-can"></span>
                    </div>
                    <h4>Recycling</h4>
                    <p>Praising pain was born & I will give  you a complete ac of the all systems, expound the actual great.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-x-12">
                <div class="service-item center">
                    <div class="icon-box">
                        <span class="icon-tool"></span>
                    </div>
                    <h4>Eco System</h4>
                    <p>Praising pain was born & I will give  you a complete ac of the all systems, expound the actual great.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-x-12">
                <div class="service-item center">
                    <div class="icon-box">
                        <span class="icon-nature-1"></span>
                    </div>
                    <h4>Save Water</h4>
                    <p>Praising pain was born & I will give  you a complete ac of the all systems, expound the actual great.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-x-12">
                <div class="service-item center">
                    <div class="icon-box">
                        <span class="icon-deer"></span>
                    </div>
                    <h4>Save Animals</h4>
                    <p>Praising pain was born & I will give  you a complete ac of the all systems, expound the actual great.</p>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="why-chooseus">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item">
                    <div class="inner-box">
                        <!--icon-box-->
                        <div class="icon_box">
                            <span class="icon-shapes"></span>
                        </div>
                        <a href="3"><h4>Supporting Good Cause</h4></a>
                    </div>
                    <div class="text"><p>Your contrbution used locally to help charitable causes and support the organization, Support only for good causes.  </p></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item">
                    <div class="inner-box">
                        <!--icon-box-->
                        <div class="icon_box">
                            <span class="icon-star"></span>
                        </div>
                        <a href="#"><h4>Most Trusted One</h4></a>
                    </div>
                    <div class="text"><p>Your contrbution used locally to help charitable causes and support the organization, Support only for good causes.  </p></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item">
                    <div class="inner-box">
                        <!--icon-box-->
                        <div class="icon_box">
                            <span class="icon-people-1"></span>
                        </div>
                        <a href="#"><h4>Supporting Good Cause</h4></a>
                    </div>
                    <div class="text"><p>Your contrbution used locally to help charitable causes and support the organization, Support only for good causes.  </p></div>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="border-bottom"></div>

<section class="call-out">
    <div class="container">
        <div class="float_left">
            <h4>Join Our Mission to Improve a Child's Feature, Pet???s Life and Our Planet.</h4>
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

                                <div class="text"><p>When you give to us you know your donation is making a diffe. </p> </div>
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
            <p>Copyrights?? 2021 - All Rights Reserved</p>

        </div><!-- /.pull-right -->
    </div><!-- /.container -->
</section>

    <!-- Scroll Top  -->
	<button class="scroll-top tran3s color2_bg"><span class="fa fa-angle-up"></span></button>

    <!-- preloader  -->
	<div class="preloader"></div>

</div>

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
