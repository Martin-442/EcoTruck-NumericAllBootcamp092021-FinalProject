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
            <option value="<?= $location['stop'] ?>"><?= $location['stop'] ?></option>
        <?php
            } ?>
        </select> <br>

        <label for="">Description</label>
        <input type="text" name="description" > <br>
        <label for="">Quantity</label>
        <input type="number" name="quantity" > <br>
        <label for="">Date</label>
        <input type="date" name="date" > <br>

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
        $(function() {
            $('#myForm').submit(function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                // Ajax call
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
                            //let data = "truckid=lkjjk;bookingDate=kjhkhj;"
                            
                            let text = '<B>CS:</B> '+result.success[0].stop+'<br><B>DY:</B> '+result.success[1].stop
                            + '<br> <B>TL:</B> ' + result.success[2]['stop']+' <br><B>Distance:</B> ' + result.success[3]
                            + ' <br>  <button id="myBtn"  >Book it</button>';
                            console.log(JSON.stringify(result.success[2]));
                            console.log(result.success[0].stop);
                            let liNode = document.createElement("li");
                            liNode.innerHTML = text;
                            node.appendChild(liNode);
                            resultDiv.appendChild(node);

                            
                        }
                    })
                    .fail(function(result) {
                        console.log('AJAX FAILED');
                    })
            });
        });
    </script>
    <script>
    $('#myBtn').click(function(e) {
            e.preventDefault();
            
            // Ajax call : ask a php file for something
            $.ajax({
               url: 'add-booking' ,
               method: 'post'
              
            })
            .done(function (result) {
                //Everything that you display/echo/write down in the 'simple.php' file will be send back here in the 'result' letiable
                this.attribute("")
                // If AJAX call worked
                //console.log(result);
                $('#result').html(result);
            })
            .fail(function (result) {
                // Fail means : file not found, 500 errors.
                // Fail doesnt mean : problem with query, syntax error in php
                console.log('AJAX FAILED');
            })
        
      });
   



    </script>
@endsection