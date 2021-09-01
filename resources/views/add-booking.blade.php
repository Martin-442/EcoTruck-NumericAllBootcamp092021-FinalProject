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
            <label for="">Description</label>
            <input id="description" type="text" name="description" > <br>
            <label for="">Quantity</label>
            <input id="qty" type="number" name="quantity" > <br>
            <label for="">Date</label>
            <input id="date"type="date" name="date" > <br>
        </div>

        <input type="submit" value="Show available truck">
        
    </form>
    <div id="results">
        
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
                        if (result.errors) {

                            for (const error of result.errors) {
                                $('#results').append(error + "<br>");
                            }
                        } else if (result.success) {
                            
                            const resultDiv = document.getElementById("results");
                            let node = document.createElement("ul");
                            dataJson.description=document.getElementById("description").value;
                            dataJson.date=document.getElementById("date").value;
                            dataJson.qty=document.getElementById("qty").value;
                            dataJson.truck_id=result.success.truck_id;
                            dataJson.truck_loc_name=result.success.truck_loc_name;
                            dataJson.truck_loc_id=result.success.truck_loc_id;
                            dataJson.dump_loc_name=result.success.dump_loc_name;
                            dataJson.dump_loc_id=result.success.dump_loc_id;
                            dataJson.CS_name=result.success.CS_name;
                            dataJson.CS_id=result.success.CS_id;
                            dataJson.distance=result.success.distance;

                            let text = '<B>CS_name:</B> '+result.success.CS_name
                                        +'<br><B>DY_name:</B> '+result.success.dump_loc_name
                                        + '<br> <B>TL_name:</B> ' + result.success.truck_loc_name
                                        +' <br><B>Distance:</B> ' + result.success.distance
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
        },
        error: function(result) {
            console.log("error on saving");
        }
    });
    }
    </script>
@endsection