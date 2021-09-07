@extends('layouts.dash')
@section('title', 'Dashboard')
@section('css')
<link href="{{ asset('css/display-profile.css') }}" rel="stylesheet">    
@endsection
@section('content')
<a href="{{ route('company.profile') }}">Profile</a>

<div id="myModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
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
<section class="eventlist">
   <div class="container">
      @if (empty($bookings))
      <p>You have no reservations yet</p>
      @endif
      <div class="row">
         <div class="col-md-9 col-sm-12 col-xs-12">
            <div class="outer-box sec-padd event-style2">
               @foreach ($bookings as $booking)
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
                        <a href="#">
                           <h4>{{ $booking->description}}</h4>
                        </a>
                        <div class="text">
                           <h5>Dump site :</h5>
                           <p>{{ $booking->dump_site}}</p>
                           <h5>Date :</h5>
                           <p>{{ $booking->booking_date}}</p>
                           <h5>Price :</h5>
                           <p>{{ $booking->price}}€ </p>
                        </div>
                     </div>
                     <ul class="post-meta list_inline">
                        <li><i class="fa fa-clock-o"></i>Starting On: {{ $booking->time}} </li>
                        |&nbsp;&nbsp;&nbsp;
                        <li><i class="fa fa-map-marker"></i> {{ $booking->construction_site}}</li>
                     </ul>
                  </div>
               </div>
               @endforeach
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
                                 <form id="myForm" class="default-form style-5" action="/dashboard-contractor" method="post" onsubmit='return false;'>
                                    @csrf
                                    <div class="clearfix">
                                       <div class="form-group">
                                          <div class="input-group input-group-sm">
                                             <span class="input-group-addon" id="sizing-addon1" >Construction site</span>
                                             <select class="form-control" id="exampleFormControlSelect1" name="location" aria-describedby="sizing-addon1" >
                                                
                                                @foreach($allLocations as $location)
                                                <option value="<?=$location['id']?>"><?=$location['stop']?></option>
                                                @endforeach
                                             </select>
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
                                             <input name="time" type="time" id="time"  class="form-control" aria-describedby="sizing-addon1">
                                          </div>
                                       </div>
                                       <div class="form-group date">
                                          <input placeholder="09/09/2021" type="text" id="datepicker" name="date" ><i class="fa fa-calendar"></i>
                                       </div>
                                       <div class="form-group">
                                          <span class="input-group-addon" id="sizing-addon1" >Description</span>
                                          <TextArea name="description" id="description" type="text" placeholder="Description...">
                                          </TextArea>
                                       </div>
                                       <div class="form-group">
                                         <input id="btn-form" class="thm-btn donate-box-btn" type="submit" value="Search">
                                          <!-- <button class="thm-btn donate-box-btn" data-toggle="modal" data-target="modal" data-loading-text="Please wait...">Search</button> -->
                                       </div>
                                  </div>
                                    <!-- ajax answer here -->
                                  </form>
                              </div>
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
</div>
<!-- /.pull-left -->
</div><!-- /.container -->
</section>
<!-- Scroll Top  -->
<button class="scroll-top tran3s color2_bg"><span class="fa fa-angle-up"></span></button>
<!-- preloader  -->
<div class="preloader"></div>
   <div id="donate-popup" class="donate-popup">
      <div class="close-donate theme-btn"><span class="fa fa-close"></span></div>
      <div class="popup-inner">
         <div class="container">
            <div class="donate-form-area">
               <div class="section-title center">
                  <h2 id="modal-title"></h2>
               </div>
               <h4></h4>
               <form id="modal-form" method="put" class="donate-form default-form" onsubmit='return false;' action="/dashboard-contractor">
               
                  <!-- <h3>Booking Information</h3> -->
                  <div class="form-bg">
                     <div class="row clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="form-group">
                              <p> <strong> Construction Site :</strong> </p>
                              <p id="construction_site"></p>
                           </div>
                        </div>
                  
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="form-group">
                              <p> <strong>Dump Site :</strong> </p>
                              <p id="dump_site"></p>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="form-group">
                              <p> <strong>Distance :</strong> </p>
                              <p id="distance"></p>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="form-group">
                              <p> <strong> Price :</strong> </p>
                              <p id="price"></p>
                           </div>
                        </div>
                     
                     </div>
                  </div>
                  <br>
                  <div class="bookBtn">
                     <div class="float_left">
                        <button  type="submit" id="btnForm" class="thm-btn" >Book</input>
                     </div>
                     <div class="center">
                        <button  type="submit" id="download" class="thm-btn" onclick=downloadBooking(dataJson) >Book & Download confirmation</input>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   </div>
  </div>

<!-- end of template file -->

<script>
let dataJson= {};

function renderModal(responseJson){
  $('#modal-form').show();
  console.log(responseJson);
  document.getElementById("modal-title").innerHTML="Booking details";
  document.getElementById("construction_site").innerHTML=responseJson.CS_name;
  document.getElementById("dump_site").innerHTML=responseJson.dump_loc_name;
  document.getElementById("distance").innerHTML=responseJson.distance +" km";
  document.getElementById("price").innerHTML=responseJson.price +" €";

  //put the data in dataJson
  dataJson.description=document.getElementById("description").value;
  dataJson.date=document.getElementById("datepicker").value;
  dataJson.truck_type=document.getElementById("truck_type").value;
  dataJson.time=document.getElementById("time").value;
  dataJson.truck_id=responseJson.truck_id;
  dataJson.truck_loc_name=responseJson.truck_loc_name;
  dataJson.truck_loc_id=responseJson.truck_loc_id;
  dataJson.dump_loc_name=responseJson.dump_loc_name;
  dataJson.dump_loc_id=responseJson.dump_loc_id;
  dataJson.CS_name=responseJson.CS_name;
  dataJson.CS_id=responseJson.CS_id;
  
  dataJson.distance=responseJson.distance;
  dataJson.price=responseJson.price;
}

function renderEmptyModal(responseJson){
   let errorData="";
   if(Array.isArray(responseJson)){
      responseJson.forEach(element => {
         errorData = errorData +"<br>"+element;
      });
   }else{
      errorData=responseJson;
   }
  $('#modal-form').hide();
  document.getElementById("modal-title").innerHTML= errorData;
}

  dataJson._token="{{ csrf_token() }}";
  $('#btn-form').on('click', function (e) {

    e.preventDefault(); //prevent to reload the page

    $.ajax({
      type: 'POST', //hide url
      url: 'dashboard-contractor', //your form validation url
      data: $('#myForm').serialize(), //USE THE ID WE SET IN THE FORM
      success: function (response) {
        console.log(response);
        if(response.errors){
          renderEmptyModal(response.errors);
        }else{
          renderModal(response.success);
        }
      },
      error: function(result) {
          console.log("all element are requiers");
      }
    });

});

  //  
  
  $('#btnForm').on('click', function (e) {
    dataJson._token={};
    dataJson._token="{{ csrf_token() }}";
    e.preventDefault(); //prevent to reload the page
    
    $.ajax({
      type: 'PUT', //hide url
      url: 'dashboard-contractor', //your form validation url
      data: dataJson, //USE THE ID WE SET IN THE FORM
      success: function (response) {
        
        console.log(response);
        console.log("youpiiii");
      },
      error: function(result) {
          console.log("error on saving");
      }
    });
      
  });

  function downloadBooking(json){
   $.ajax({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        url: "/download/pdf",
       
        data:json,
        method: 'post',
        cache: false,
        xhrFields: {
        responseType: '',
        crossDomain: false,
        
        },
        
            success: function (data) {
               //var blob = new Blob([data], { type: 'application/pdf' });
               var link = document.createElement('a');
               link.href = "http://localhost:8000/file-download/"+data;
               console.log(link.href);
               link.download = data;

               link.click();
               link.remove();
               

            },
            error: function(result) {
                console.log("error on printing");
            }
            
            
         
         });
               
      }

  
   
  
</script>

@endsection