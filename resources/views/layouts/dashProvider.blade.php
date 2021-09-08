<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


	<!-- mobile responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/responsive.css')}}">

<!-- moved @import section from  /css/style.css - START -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
<link rel="stylesheet" href="{{asset('css/jquery.bootstrap-touchspin.css')}}">
<link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">

<link rel="stylesheet" href="{{asset('css/settings.css')}}">
<link rel="stylesheet" href="{{asset('/css/layers.css')}}">
<link rel="stylesheet" href="{{asset('/css/navigation.css')}}">

<link rel="stylesheet" href="{{asset('/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('/css/jquery.bxslider.css')}}">
<link rel="stylesheet" href="{{asset('/css/flexslider.css')}}">

<link rel="stylesheet" href="{{asset('/css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{asset('/css/jquery-ui.theme.css')}}">
<link rel="stylesheet" href="{{asset('/css/jquery.fancybox.css')}}">
<link rel="stylesheet" href="{{asset('/css/polyglot-language-switcher.css')}}">

<link rel="stylesheet" href="{{asset('/css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('/css/nouislider.css')}}">
<link rel="stylesheet" href="{{asset('/css/nouislider.pips.css')}}">
<link rel="stylesheet" href="{{asset('/css/menu.css')}}">
<link rel="stylesheet" href="{{asset('/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('/css/imagehover.min.css')}}">
<link rel="stylesheet" href="{{asset('/css/player.css')}}">
<!-- moved @import section from  /css/style.css - END -->

	<link rel="apple-touch-icon" href="{{asset('/images/fav-icon/apple-touch-icon.png')}}" sizes="180x180">
	<link rel="icon" type="image/png" href="{{asset('/images/fav-icon/favicon-32x32.png')}}" sizes="32x32">
	<link rel="icon" type="image/png" href="{{asset('/images/fav-icon/favicon-16x16.png')}}" sizes="16x16">

	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/pie-chart.js')}}"></script>

	<script src="{{asset('js/jquery-ui.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/custom.js')}}"></script>
  



    <!-- mobile responsive meta  from Theme -->

	<!--  <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">

	<link rel="apple-touch-icon" sizes="180x180" href="images/fav-icon/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="images/fav-icon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="images/fav-icon/favicon-16x16.png" sizes="16x16"> 

	
	<script src="js/jquery.js"></script>
	<script src="js/pie-chart.js"></script>

	<script src="js/jquery-ui.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/imagezoom.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.polyglot.language.switcher.js"></script>
    <script src="js/SmoothScroll.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/nouislider.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/pie-chart.js"></script>
    <script src="js/jquery-ui.js"></script>


    <script src="js/rev-slider/jquery.themepunch.tools.min.js"></script>
    <script src="js/rev-slider/jquery.themepunch.revolution.min.js"></script>
    <script src="js/rev-slider/revolution.extension.actions.min.js"></script>
    <script src="js/rev-slider/revolution.extension.carousel.min.js"></script>
    <script src="js/rev-slider/revolution.extension.kenburn.min.js"></script>
    <script src="js/rev-slider/revolution.extension.layeranimation.min.js"></script>
    <script src="js/rev-slider/revolution.extension.migration.min.js"></script>
    <script src="js/rev-slider/revolution.extension.navigation.min.js"></script>
    <script src="js/rev-slider/revolution.extension.parallax.min.js"></script>
    <script src="js/rev-slider/revolution.extension.slideanims.min.js"></script>
    <script src="js/rev-slider/revolution.extension.video.min.js"></script>

 -->
 
    

    @yield('css')




</head>
<body>
@yield('content')


</body>



<!--
  <script src="js/menu.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.mixitup.min.js"></script>

  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/imagezoom.js"></script>

  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.polyglot.language.switcher.js"></script>

  <script src="js/SmoothScroll.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/jquery.countTo.js"></script>
  <script src="js/validation.js"></script>

  <script src="js/wow.js"></script>
  <script src="js/jquery.fitvids.js"></script>
  <script src="js/nouislider.js"></script>
  <script src="js/isotope.js"></script>

   <script src="js/rev-slider/jquery.themepunch.tools.min.js"></script>
   <script src="js/rev-slider/jquery.themepunch.revolution.min.js"></script>
   <script src="js/rev-slider/revolution.extension.actions.min.js"></script>
   <script src="js/rev-slider/revolution.extension.carousel.min.js"></script>
   <script src="js/rev-slider/revolution.extension.kenburn.min.js"></script>
   <script src="js/rev-slider/revolution.extension.layeranimation.min.js"></script>
   <script src="js/rev-slider/revolution.extension.migration.min.js"></script>
   <script src="js/rev-slider/revolution.extension.navigation.min.js"></script>
   <script src="js/rev-slider/revolution.extension.parallax.min.js"></script>
   <script src="js/rev-slider/revolution.extension.slideanims.min.js"></script>
   <script src="js/rev-slider/revolution.extension.video.min.js"></script>
-->
   
</html>
