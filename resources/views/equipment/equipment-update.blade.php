@extends('layouts.dashProvider')
@section('title', 'Update Equipment')
@section('content')
<div class="boxed_wrapper">
   <div class="boxed_wrapper">
      <section class="theme_menu stricky">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="main-logo">

                     <a href="{{ route('homepage') }}"><img src="{{asset('images/logo/logo.png')}}" alt=""></a>
                        <!-- <img src="{{ asset ('')}}" alt=""> -->

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
   <div class="inner-banner has-base-color-overlay text-center" style=" height:50px;">
      <div class="container">
         <div class="box">
            <!-- <h1>Book a breath for earth</h1> -->
         </div>
      </div>
   </div>
   <section class="register-section sec-padd-top">
      <div class="container">
          <div class="center">
              <span class="adon-icon"><span class="fas fa-truck"></span></span>
              <h3>Equipment Update Form</h3>
            </div>
         <div class="row">
            <!--Form Column Right side-->
            <div class="form-column column col-lg-6 col-md-6 col-sm-12 col-xs-12">
               <form method="post" id="updateProfile" >
                   @csrf
                  <div class="section-title style-2"></div>

                  <!-- Collating Update data Form -->
                  <div class="styled-form login-form">
                     <div class="form-group">
                        <label>Truck Type</label>
                            <select class="form-control" id="truck_type" name="truck_type" placeholder="" value="{{ $equipment->truck_type ?? '' }}">
                                <option>Select One</option>
                                <option value="Standard">Standard</option>
                                <option value="Semi Trailer">Semi Trailer</option>
                                <option value="Dump Truck">Dump Truck</option>
                                <option value="Truck Pup">Truck Pup</option>
                            </select>
                     </div>
                     <div class="form-group">
                     <label>Brand</label>
                        <input type="text" name="brand" value="{{$equipment->brand ?? ''}}">
                     </div>
                     <div class="form-group">
                     <label>Model</label>
                        <input type="text" name="model" value="{{$equipment->model ?? ''}}">
                     </div>
                     <div class="form-group">
                     <label>Year</label>
                        <input type="text" name="year" value="{{$equipment->year ?? ''}}">
                     </div>
                     <div class="form-group">
                     <label>Fuel</label>
                        <input type="text" name="fuel" value="{{$equipment->fuel ?? ''}}">
                     </div>
               </div>
            </div>
            <!--Form Column Left Side-->
            <div class="form-column column col-lg-6 col-md-6 col-sm-12 col-xs-12">
               <div class="section-title style-2">
               </div>
            <!--Collating Update data Form-->
               <div class="styled-form register-form">

                  <div class="form-group">
                    <label>Mileage</label>
                        <input type="text" name="mileage" value="{{$equipment->mileage ?? ''}}">
                  </div>
                  <div class="form-group">
                    <label>Capacity in volume m&sup3</label>
                        <input type="text" name="capacity" value="{{$equipment->capacity ?? ''}}">
                  </div>
                  <div class="form-group">
                    <label>Truck Location</label>
                        <input type="text" name="truck_location" value="{{$equipment->truck_location ?? ''}}">
                  </div>
                  <div class="form-group">
                    <label>City</label>
                        <input type="text" name="city" value="{{$equipment->city ?? ''}}">
                  </div>
                  <div class="form-group">
                    <label>Postal Code</label>
                        <input type="text" name="postal_code" value="{{$equipment->postal_code ?? ''}}">
                  </div>
                  <div class="form-group">
                    <label>Specification</label>
                        <input type="text" name="specification" value="{{$equipment->specification ?? ''}}">
                  </div>
            </div>
            </div>
         </div>
         <div class="clearfix">
            <div class="form-group center">
                <button  id="btn-form" type="submit" class="thm-btn thm-tran-bg">Update Equipment</button>
             </div>
         </div>
         </form> <br><br>
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
<script>
//
</script>
@endsection


    <!--form action="" method="post"> -->
      <!-- @csrf CSRF Use for sequrity in Laravel> -->
        <!-- Submit buttun
        <div class="md-12">
                <a href="{{ URL::route('dashboard_provider') }}" class="btn btn-outline-light">Cancel</a>
                <button type="submit" class="btn btn-outline-light">update Equipment</button>
            </div>

        <label for="truck_type">Truck Type:</label><input type="text" value="{{$equipment->truck_type ?? ''}}"><br>
        <label for="brand">Brand:</label><input type="text" name="brand" placeholder="Brand" value="{{$equipment->brand}}"><br>
        <label for="model">Model:</label><input type="text" name="model" placeholder="Model" value="{{$equipment->model}}"><br>
        <label for="year">Year:</label><input type="number" name="year" placeholder="Year" value="{{$equipment->year}}"><br>
        <label for="fuel">Fuel:</label><input type="text" name="fuel" placeholder="Fuel" value="{{$equipment->fuel}}"><br>
        <label for="mileage">Mileage:</label><input type="text" name="mileage" placeholder="Mileage" value="{{$equipment->mileage}}"><br>
        <label for="capacity">Capacity:</label><input type="number" name="capacity" placeholder="Capacity" value="{{$equipment->capacity}}"><br>
        <label for="truck_location">Truck Location:</label><input type="text" name="truck_location" placeholder="Truck Location" value="{{$equipment->truck_location}}"><br>
        <label for="city">City:</label><input type="text" name="city" placeholder="City" value="{{$equipment->city}}"><br>
        <label for="postal_code">Postal_code:</label><input type="number" name="postal_code" placeholder="Postal Code" value="{{$equipment->postal_code}}"><br>
        <label for="specification">Specification:</label><input type="text" name="specification" placeholder="Specification" value="{{$equipment->specification}}"><br>
        <input type="submit" value="Update Equipment">
    </form -->


