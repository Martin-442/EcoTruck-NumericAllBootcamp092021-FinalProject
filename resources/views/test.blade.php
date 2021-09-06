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


<div id="myModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        lkjljlkjlj
    </div>
    </div>
</div>
<!-- Modale-->

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
                <!-- donate to change-->
                <button class="thm-btn donate-box-btn">Profile</button>
            </div>
            <div class="right-column">
                <div class="right-area">

                   </div>
                </div>

            </div>


        </div>


   </div>
</section>




 <div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/4.jpg); height:50px;">
    <div class="container">
        <div class="box">
            <h1>Book a breath for earth</h1>
        </div>
    </div>
</div>


<section class="eventlist">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="outer-box sec-padd event-style2">
                    <div class="item style-1 clearfix">
                        <div class="img-column float_left">
                            <figure class="img-holder">
                                <a href="#"><img src="images/logo/1.png" alt=""></a>
                                <div class="date"><span>21 <br>Mar</span></div>
                            </figure>
                        </div>
                        <div class="text-column float_left">
                            <div class="lower-content">
                                <p>Organizer: Imane</p>
                                <a href="#"><h4>Desciption</h4></a>
                                <div class="text">
                                    <h5>Dump site :</h5>
                                    <p>a remplir dump_site_id</p>

                                    <h5>Date :</h5>
                                    <p>a remplir date</p>
                                    <h5>Price :</h5>
                                    <p>a remplir price/p>

                                </div>
                            </div>
                            <ul class="post-meta list_inline">
                                <li><i class="fa fa-clock-o"></i>Started On: 11.00am </li> |&nbsp;&nbsp;&nbsp;
                                <li><i class="fa fa-map-marker"></i> New Grand Street, California</li>
                            </ul>
                        </div>
                    </div>
                    <div class="item style-1 clearfix">
                        <div class="img-column float_left">
                            <figure class="img-holder">
                                <a href="#"><img src="images/logo/1.png" alt=""></a>
                                <div class="date"><span>07 <br>Mar</span></div>
                            </figure>
                        </div>
                        <div class="text-column float_left">
                            <div class="lower-content">
                                <p>Organizer: Amine</p>
                                <a href="#"><h4>Recycling Plastic Bottles</h4></a>
                                <div class="text">
                                    <p></p>
                                </div>
                            </div>
                            <ul class="post-meta list_inline">
                                <li><i class="fa fa-clock-o"></i> Started On: 09.00am   </li> |&nbsp;&nbsp;&nbsp;
                                <li><i class="fa fa-map-marker"></i> Behind Alias Street, Melbourne</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="blog-sidebar sec-padd">
                    <div class="event-filter">
                       <div class="section-title style-2">
                            <h4>Add Booking</h4>
                        </div>
                        <div class="tabs-outer">
                            <!--Tabs Box-->
                            <div class="tabs-box tabs-style-two">


                                <!--Tabs Content-->
                                <div class="tabs-content">
                                    <!--Tab / Active Tab-->

                                    <!--Tab-->
                                    <div class="tab active-tab" id="tab-two" style="display: block;">
                                        <div class="default-form-area all">
                                            <form id="" class="default-form style-5">
                                                <div class="clearfix">
                                                    <div class="form-group">
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-addon" id="sizing-addon1" >Construction site</span>
                                                            <input type="number" min="0" class="form-control" aria-describedby="sizing-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-addon" id="sizing-addon1" >Truck type</span>
                                                            <select class="form-control"  id="truck_type"  aria-describedby="sizing-addon1" name="truck_type">
                                                                    <option value="Standard">Standard</option>
                                                                    <option value="Semi trailer">Semi trailer</option>
                                                                    <option value="Dump Truck">Dump Truck</option>
                                                                    <option value="Truck Pup">Truck Pup</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group input-group-sm">
                                                            <span class="input-group-addon" id="sizing-addon1" >Time</span>
                                                            <input type="time" min="0" class="form-control" aria-describedby="sizing-addon1">
                                                        </div>
                                                    </div>

                                                    <div class="form-group date">
                                                    <span class="input-group-addon" id="sizing-addon1" >Choose date</span>
                                                        <input placeholder="21/08/217" type="text" id="datepicker"><i class="fa fa-calendar"></i>
                                                    </div>

                                                    <div class="form-group">
                                                        <span class="input-group-addon" id="sizing-addon1" >Description</span>
                                                        <TextArea type="text" placeholder="Description...">
                                                        </TextArea>
                                                    </div>
                                                    <div class="form-group">
                                                        <button id="seach" class="thm-btn" data-toggle="modal" data-target="#myModal" data-loading-text="Please wait...">Search</button>
                                                    </div>


                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <!--Tab
                                    <div class="tab" id="tab-one" style="display: none;">
                                         <div class="default-form-area all">
                                            <form id="contact-form" name="contact_form" class="default-form style-5" action="inc/sendmail.php" method="post">
                                                <div class="clearfix">

                                                    <div class="form-group">
                                                        <div class="select-box">
                                                            <select class="text-capitalize selectpicker form-control required" name="form_subject" data-style="g-select" data-width="100%">
                                                                <option value="0" selected="">Select venue</option>
                                                                <option value="1">Select venue</option>
                                                                <option value="2">Select venue</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group date">
                                                        <input placeholder="21/08/217" type="text" id="datepicker"><i class="fa fa-calendar"></i>
                                                    </div>


                                                    <div class="form-group">
                                                        <input type="text" placeholder="Search....">
                                                        <button class="tran3s"><i class="fa fa-search" aria-hidden="true"></i></button>
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                                        <button class="thm-btn" type="submit" data-loading-text="Please wait...">send message</button>
                                                    </div>


                                                </div>
                                            </form>
                                        </div>
                                    </div>-->
                                    <!--Tab-->


                                </div>

                            </div>
                        </div>

                    </div>
                    

                </div>
            </div>
        </div>

    </div>
</section>


<section class="call-out">
    <div class="container">
        <div class="text-center ">
            <h4>Join Our Mission to Improve a Child's Feature, Pet’s Life and Our Planet.</h4>
        </div>
        <!-- <div class="float_right">
            <a href="#" class="thm-btn style-3">Get Involeved</a>
        </div> -->

    </div>
</section>

        <div class="pull-right get-text">

        </div><!-- /.pull-left -->
    </div><!-- /.container -->
</section>

    <!-- Scroll Top  -->
    <button class="scroll-top tran3s color2_bg"><span class="fa fa-angle-up"></span></button>
    <!-- preloader  -->
    <!-- preloader  -->
    <div class="preloader"></div>
         <div id="donate-popup" class="donate-popup">
            <div class="close-donate theme-btn"><span class="fa fa-close"></span></div>
            <div class="popup-inner">
               <div class="container">
                  <div class="donate-form-area">
                     <div class="section-title center">
                        <h2>Donation Information</h2>
                     </div>
                     <h4>How much would you like to donate:</h4>
                     <form  action="#" class="donate-form default-form">
                     
                        <h3>Profile Information</h3>
                        <div class="form-bg">
                           <div class="row clearfix">
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                 <div class="form-group">
                                    <p>Your Name*</p>
                                    <input type="text" name="fname" placeholder="">
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                 <div class="form-group">
                                    <p>Your test</p>
                                    <input type="text" name="fname" placeholder="">
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                 <div class="form-group">
                                    <p>Email*</p>
                                    <input type="text" name="fname" placeholder="">
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                 <div class="form-group">
                                    <p>Address*</p>
                                    <input type="text" name="fname" placeholder="">
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                 <div class="form-group">
                                    <p>Phn Num*</p>
                                    <input type="text" name="fname" placeholder="">
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="center"><button class="thm-btn" type="submit">Donate Now</button></div>
                     </form>
                  </div>
               </div>
            </div>
         </div>


    <!-- jQuery -->
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



    <!-- revolution slider js -->
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


    <script src="js/custom.js"></script>

    <!-- custom used by Imane Saadane -->

</div>

@endsection

