@extends('layouts.dash')
@section('title', 'Update Profile')
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
                     <a href="index.html"><img src="images/logo/logo.png" alt=""></a>
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
            <!--Form Column-->
            <div class="form-column column col-lg-6 col-md-6 col-sm-12 col-xs-12">
               <form method="post" id="updateProfile" >
                   @csrf
                  <div class="section-title style-2">
                     <h3>Your Profile</h3>
                  </div>
                  
                  <div class="styled-form login-form">
                     <div class="form-group">
                        <span class="adon-icon"><span class="fa fa-user"></span></span>
                        <p><strong>First name: </strong>  {{ $userDetails->first_name }}</p>
                     </div>

            
                     <div class="form-group">
                         <span class="adon-icon"><span class="fa fa-user"></span></span>
                         <p><strong>Last name: </strong> {{ $userDetails->last_name }}</p>
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                            <p><strong>Email: </strong> {{ $userDetails->email }}</p>
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fas fa-map-marker-alt"></span></span>
                            <p><strong>City: </strong> {{ $userDetails->city}}</p>
                        </div>
                        <!-- <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                            <input type="password" name="userpassword" value="" placeholder="Enter Password">
                        </div> -->
                    </div>
                </div>
                <!--Form Column-->
                
                
               
                <div class="form-column column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="section-title style-2">
                        <h3>Company Profile</h3>
                        
                </div>
           
                <div class="styled-form register-form">
                    <div class="form-group">
                        <span class="adon-icon"><span class="fa fa-user"></span></span>
                        <p><strong>Company name : </strong> {{ $companyDetails->company_name }}</p>
                    </div>
                <div class="form-group">
                        <span class="adon-icon"><span class="fas fa-map-marker-alt"></span></span>
                        <p><strong>Address: </strong> {{ $companyDetails->address }}</p>
                </div>
                <div class="form-group">
                
                        <span class="adon-icon"><span class="far fa-mailbox"></span></span>
                        <p><strong> Postal Code: </strong> {{ $companyDetails->zip_code }}</p>
                </div>
                <div class="form-group">
                        <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                        <p><strong> Email: </strong> {{ $companyDetails->email}}</p>
                </div>
            </div>
            </div>
         </div>
         <div class="clearfix">
            <div class="form-group center">
                <button  class="thm-btn thm-tran-bg"><a id="editProfile" href="{{ route('profile.update') }}">Edit profile</a></button>
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

@endsection
