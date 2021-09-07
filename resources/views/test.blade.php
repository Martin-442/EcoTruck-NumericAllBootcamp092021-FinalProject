@extends('layouts.dash')
@section('title','Dashboard')

<!-- 	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->

@section('css')
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css"> 
<!-- 
	 <link rel="apple-touch-icon" sizes="180x180" href="images/fav-icon/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="images/fav-icon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="images/fav-icon/favicon-16x16.png" sizes="16x16">  -->
    

@endsection
@section('content')

<div class="row justify-content-end">
    <div class="col-4">
      One of two columns
    </div>
    <div class="col-4">
      One of two columns
    </div>
  </div>
  <div class="row justify-content-around">
    <div class="col-4">
      One of two columns
    </div>
    <div class="col-4">
      One of two columns
    </div>
  </div>
@endsection

