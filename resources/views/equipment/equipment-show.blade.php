@extends('layouts.dashProvider')
@section('title', 'Dashboard')
@section('css')
<link href="{{ asset('css/display-profile.css') }}" rel="stylesheet">    
@endsection
@section('content')
<div class="boxed_wrapper">
   <div class="boxed_wrapper">
      <section class="theme_menu stricky">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="main-logo">
                     <a href="index.html"><img src="{{asset('images/logo/logo.png')}}" alt=""></a>
                  </div>
               </div>
               <div class="col-md-9 menu-column">
                  <!-- nav -->
               </div>
               <div class="right-column">
                  <div class="right-area">
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
   <div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/4.jpg); height:50px;">
      <div class="container">
         <div class="box">
            <!-- <h1>Book a breath for earth</h1> -->
         </div>
      </div>
   </div>
   <section class="register-section sec-padd-top">
      <div class="container">
         <div class="row">
            <!-- Equipments -->
            <div class="form-column column col-lg-6 col-md-6 col-sm-12 col-xs-12">
              
                   @csrf
                  <div class="section-title style-2">
                     <h3>Equipments </h3>
                  </div>
                  
                  <div class="styled-form login-form">
                     
                     <div class="form-group">
                     
                        <span class="adon-icon"><span class="fas fa-truck"></span></span>
                        <p><strong>Type : </strong> {{$equipment->truck_type}}</p>
                        <p><strong>Brand : </strong> {{$equipment->brand}}</p>
                        <p><strong>Model: </strong> {{$equipment->model}}</p>
                        <p><strong>Year : </strong> {{$equipment->year}}</p>
                        <p><strong>Fuel : </strong> {{$equipment->fuel}}</p>
                        <p><strong>Mileage : </strong> {{$equipment->mileage}}</p>
                        <p><strong>Capacity : </strong> {{$equipment->capacity}}</p>
                        <p><strong>Location : </strong> {{$equipment->truck_location}}</p>
                        <p><strong>City : </strong> {{$equipment->city}}</p>
                        <p><strong>Postal Code : </strong> {{$equipment->postal_code}}</p>
                        <p><strong>Specification : </strong> {{$equipment->specification}}</p>
                           <br>
                           
                    </div>
                     <br>
                           

  
                  </div>
                     
         </div>
          
   </div>
         <div class="clearfix">
            <div class="form-group center">         
            </div>
         </div>
         <br><br>
</div>
</section>
<section class="call-out">
   <div class="container">
      <div class="text-center">
         <h4>Our mission: Reducing CO&sup2; emission!</h4>
      </div>
   </div>
</section>
   <!-- Scroll Top  -->
   <button class="scroll-top tran3s color2_bg"><span class="fa fa-angle-up"></span></button>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
   integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

@endsection