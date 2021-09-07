@extends('layouts.mytemplate')

@section('title', 'All trucks')

@section('content')
    <form id="myForm" action="" method="post">
    @csrf

        <label for="">Location</label>
        <select name="location" >
        <option selected="selected">Choose construction location</option>
        <?php
            foreach($allLocations as $location) { ?>
            <option value="<?= $location['id'] ?>"><?= $location['stop'] ?></option>
        <?php
            } ?>
        </select> <br>

        <div>
            
            <label for="">Truck Type</label>
            <select id="truck_type" name="truck_type" >
                <option value="Standard">Standard</option>
                <option value="Semi trailer">Semi trailer</option>
                <option value="Dump Truck">Dump Truck</option>
                <option value="Truck Pup">Truck Pup</option>
            </select><br>
            <label for="">Date</label>
            <input id="date" type="date" name="date" > <br>
            <label for="">Time</label>
            <input id="time" type="time" name="time" > <br>
            <label for="">Description</label><br>
            <textarea id="description" name="description" rows="4" cols="50">
            </textarea>
        </div>

        <input type="submit" value="Show available truck">
        
    </form>

    <div id="results">
        
    </div>
    <div id="confirmation">
           
    </div>
    <!-- Button trigger modal -->
    
<!-- Modal -->
<div class="modal fade" id="downloadPdfModal" tabindex="-1" role="dialog" aria-labelledby="downloadPdfModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bookings detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        You're booking has been saved successfully
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick=downloadBooking(dataJson) >Download booking confirmation</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        /* Wait for the page to be loaded/ready */
        let dataJson= {};
        dataJson._token="{{ csrf_token() }}";
        $(function() {
            $('#myForm').submit(function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                //dataJson.form= this;

                $.ajax({
                        url: "add-booking",
                        method: 'post',
                        data: formData,
                        processData: false,
                        contentType: false,
                        dataType: 'json'
                    })
                    .done(function(result) {
                        
                        $('#results').html('');
                        // Did we get errors or success ?
                        if (result.error) {
                                $('#results').html(result.error);
                            
                        } else if (result.success) {
                            
                            const resultDiv = document.getElementById("results");
                            let node = document.createElement("ul");
                            dataJson.description=document.getElementById("description").value;
                            dataJson.date=document.getElementById("date").value;
                            dataJson.truck_type=document.getElementById("truck_type").value;
                            //console.log(dataJson.truck_type);
                            dataJson.time=document.getElementById("time").value;
                            dataJson.truck_id=result.success.truck_id;
                            dataJson.truck_loc_name=result.success.truck_loc_name;
                            dataJson.truck_loc_id=result.success.truck_loc_id;
                            dataJson.dump_loc_name=result.success.dump_loc_name;
                            dataJson.dump_loc_id=result.success.dump_loc_id;
                            dataJson.CS_name=result.success.CS_name;
                            dataJson.CS_id=result.success.CS_id;
                            dataJson.distance=result.success.distance;
                            dataJson.price=result.success.price;
                            
                            let text = '<B>CS_name:</B> '+result.success.CS_name
                                        +'<br><B>DY_name:</B> '+result.success.dump_loc_name
                                        + '<br> <B>TL_name:</B> ' + result.success.truck_loc_name
                                        +' <br><B>Distance:</B> ' + result.success.distance
                                        +' <br><B>Price:</B> ' + result.success.price+'€'
                                        + ' <br>  <button id="myBtn"  onclick="storeTruck(dataJson)" >Book it</button>';
                            
                            console.log(result.success);
                            let liNode = document.createElement("li");
                            liNode.innerHTML = text;
                            node.appendChild(liNode);
                            resultDiv.appendChild(node);
                        }
                    })
                    .fail(function(result) {
                        console.log('AJAX FAILED', result);
                    })
            });

        
        
   
    });
    
    function storeTruck(json){
        console.log(JSON.stringify(json));
        
        $.ajax({
        type: "PUT",
        url: "add-booking",
        data: json,
        //dataType: 'json',
        success: function(result) {
             console.log(result);
            /*const resultDiv = document.getElementById("confirmation");      
            let text = '<br>  <button id="download"  >Download Booking</button>';
            resultDiv.innerHTML = text; */
            $('#downloadPdfModal').modal('show');
        },
        error: function(result) {
            console.log("error on saving");
        }
    });
        
    }

    function downloadBooking(json){
        console.log("download");
        console.log(JSON.stringify(json));
        $.ajax({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        url: "/download/pdf",
        method: 'post',
        data: json,
        xhrFields: {
            responseType: 'blob'
        },
        success: function (data) {
            let a = document.createElement('a');
            let url = window.URL.createObjectURL(data);
            a.href = url;
            a.download = 'bookingConf.pdf';
            document.body.append(a);
            a.click();
            a.remove();
            window.URL.revokeObjectURL(url);
        },
        error: function(result) {
            console.log("error on printing");
        }
    });
    
    } 

    </script>
@endsection