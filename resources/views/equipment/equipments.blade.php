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
                     <a href="{{ route('homepage') }}"><img src="images/logo/logo.png" alt=""></a>
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
                     @foreach ($equipments as $equipment)
                     <div class="form-group">
                     <li class="list-group-item d-flex justify-content-between align-items-start" style= "margin-bottom:5px;">
                        <span class="adon-icon"><span class="fas fa-truck"></span></span>
                           <p><strong>Brand: </strong> {{$equipment->brand}}</p>
                           <p><strong>Model: </strong> {{$equipment->model}}</p>
                           <p><strong>Mileage: </strong> {{$equipment->mileage}}</p>
                           <p><strong>City: </strong> {{ $equipment->city }}</p>
                           <br>
                           <!-- creating link using the name of the route (check equipment.php file)  -->
                           <a class="btn btn-primary btn-sm"  href="{{ route('equipment.equipment-show', [$equipment->id])}}">Details</a>
                           <a class="btn btn-info btn-sm"  href="{{ route('update.equipment-update', [$equipment->id])}}">Edit</a>
                           <a class="btn btn-danger btn-sm" href="{{ route('delete.equipment', [$equipment->id])}}">Delete this equipment ?</a>
</li>
                        </div>
                     <br>
                     @endforeach
                        @if($message = Session::get('success'))
                           <p style="color:green">{{$message}}</p>
                        @endif
                  </div>
                     <a class="btn btn-secondary btn-lg btn-block" href="{{ URL::route('equipment.equipment-new') }}">Add new equipment</a><br>
         </div>
                <!-- Booking -->
         <div class="form-column column col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="section-title style-2">
               <h3>Bookings</h3>
            </div>
               <div class="styled-form register-form">
                  <div class="form-group">
                    @foreach ($bookings as $booking)
                  <li class="list-group-item d-flex justify-content-between align-items-start" style= "margin-bottom:5px;">
                  <span class="adon-icon"><span class="far fa-file-alt"></span></span>
                     <div class="ms-2 me-auto">
                        <p><strong>construction site : </strong> {{ $booking->construction_site }}</p>
                        <p><strong>Dump site : </strong> {{ $booking->dump_site }}</p>
                        <p><strong>Booking date: </strong> {{ $booking->booking_date }}</p>
                     </div>
                  </li>
                     @endforeach
                  </div>
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
