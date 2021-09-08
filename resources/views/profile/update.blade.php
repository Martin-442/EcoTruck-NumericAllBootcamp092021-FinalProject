@extends('layouts.dash')
@section('title', 'Update Profile')
@section('content')
<div class="boxed_wrapper">
   <div class="boxed_wrapper">
      <section class="theme_menu stricky">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="main-logo">
                     <a href="{{url('/homepage') }}"><img src="images/logo/logo.png" alt=""></a>
                  </div>
               </div>
               <div class="col-md-9 menu-column">
                <nav class="menuzord" id="main_menu">
                   <ul class="menuzord-menu">
                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li><a href="{{url('/profile') }}">Profile</a></li>
                        <li><a href="{{ url('/logout') }}">Logout</a></li>
                    </ul>
                </nav>
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
                  <!--Login Form-->
                  <div class="styled-form login-form">
                     <div class="form-group">
                        <span class="adon-icon"><span class="fa fa-user"></span></span>
                        <input type="text" name="firstName" value="{{$userDetails->first_name}}">
                     </div>
                     <div class="form-group">
                        <span class="adon-icon"><span class="fa fa-user"></span></span>
                        <input type="text" name="lastName" value="{{$userDetails->last_name}}">
                     </div>
                     <div class="form-group">
                        <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                        <input type="email" name="email" value="{{$userDetails->email}}">
                     </div>
                     <div class="form-group">
                        <span class="adon-icon"><span class="fas fa-map-marker-alt"></span></span>
                        <input type="text" name="city" value="{{$companyDetails->city}}">
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
            <!--Login Form-->
                <div class="styled-form register-form">
                    <div class="form-group">
                        <span class="adon-icon"><span class="fa fa-user"></span></span>
                        <input type="text" name="companyName" value="{{ $companyDetails->company_name }}">
                    </div>
                <div class="form-group">
                        <span class="adon-icon"><span class="fas fa-map-marker-alt"></span></span>
                        <input type="text" name="address" value="{{ $companyDetails->address}}">
                </div>
                <div class="form-group">
                        <span class="adon-icon"><span class="fas fa-map-marker-alt"></span></span>
                        <input type="text" name="zip_code" value="{{ $companyDetails->zip_code}}">
                </div>
                <div class="form-group">
                        <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                        <input type="email" name="companyEmail" value="{{ $companyDetails->email}}">
                </div>
            </div>
            </div>
         </div>
         <div class="clearfix">
            <div class="form-group center">
                <button  id="btn-form" type="submit" class="thm-btn thm-tran-bg">Update Profile</button>
             </div>
         </div>
         </form> <br><br>
      </div>
   </section>
   <section class="call-out">
      <div class="container">
         <div class="text-center">
            <h4>Our mission: Reducing CO<sub>2</sub> emission!</h4>
         </div>
      </div>
   </section>
   <!-- Scroll Top  -->
   <button class="scroll-top tran3s color2_bg"><span class="fa fa-angle-up"></span></button>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
   integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
//    $('#btn-form').on('submit', function (e) {

//            e.preventDefault();
//            let formData = new FormData(this);
//            // Ajax call
//            $.ajax({
//                    url: "/update",
//                    method: 'post',
//                    data: formData,
//                    processData: false,
//                    contentType: false,
//                    dataType: 'json'
//                })
//                .done(function(result) {
//                    $('#results').html('');
//                    // Did we get errors or success ?
//                    if (result.errors) {
//                        for (const error of result.errors) {
//                            $('#results').append(error + "<br>");
//                        }
//                    } else if (result.success) {
//                        $('#results').html(result.success);
//                    }
//                })
//                .fail(function(result) {
//                    console.log('AJAX FAILED');
//                })

//    });
</script>
@endsection
