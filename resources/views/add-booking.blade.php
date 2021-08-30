@extends('layouts.mytemplate')

@section('title', 'All trucks')

@section('content')
    <form action="">
        <label for="">Location</label>
        <input type="text" name="location" > <br>
        <label for="">Description</label>
        <input type="text" name="description" > <br>
        <label for="">Quantity</label>
        <input type="number" name="quantity" > <br>
        <label for="">Date</label>
        <input type="date" name="date" > <br>

        <input type="submit" value="Show available truck">
        
    </form>
    <div id="results"></div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        /* Wait for the page to be loaded/ready */
        $(function() {
            $('form').submit(function(e) {
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
                            $('#results').html(result.success);
                        }
                    })
                    .fail(function(result) {
                        console.log('AJAX FAILED');
                    })
            });
        });
    </script>
@endsection