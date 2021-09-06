<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'EcoTruck' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/themestrap.css') }}"><!-- color chages to bootstrap -->

    <!-- mobile responsive meta  from Theme -->
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


	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('_ecogreen/images/fav-icon/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" href="{{asset('_ecogreen/images/fav-icon/favicon-32x32.png')}}" sizes="32x32">
	<link rel="icon" type="image/png" href="{{asset('_ecogreen/images/fav-icon/favicon-16x16.png')}}" sizes="16x16">

	<script src="{{asset('_ecogreen/js/jquery.js')}}"></script>
	<script src="{{asset('_ecogreen/js/pie-chart.js')}}"></script>

	<script src="{{asset('_ecogreen/js/jquery-ui.js')}}"></script>
	<script src="{{asset('_ecogreen/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('_ecogreen/js/custom.js')}}"></script>
    <!-- mobile responsive meta  from Theme -->

    {{ $css ?? '' }}
    {{ $headerScript ?? '' }}
</head>
<body>
    <div class="container">
        {{ $header }}

{{--         << $navscroller >>
 --}}
        {{ $jumbotron }}

        <div class="row mb-2">
            {{ $providerCTA }}
            {{ $contractorCTA }}
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
