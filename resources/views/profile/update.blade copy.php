@extends('layouts.mytemplate')

@section('title', 'Company Profile')

@section('content')

    <h3>Update profile</h3>
    <div >

        <form id="updateProfile" action="" method="post">
            
        @csrf
            <section>
                <label for="">First name:</label>
                <input type="text" name="firstName" value="{{$userDetails->first_name}}" ><br>
                <label for="">Last name:</label>
                <input type="text" name="lastName" value="{{$userDetails->last_name}}" ><br>
                <label for="">City:</label>
                <input type="text" name="city" value="{{$userDetails->city}}" ><br>
                <label for="">Email:</label>
                <input type="text" name="email" value="{{$userDetails->email}}" >
    
                
            
            </section>
           
            <section>
                <label for="">Company name :</label>
                <input  type="text" name="companyName" value="{{ $companyDetails->company_name }}" > <br>
                <label for="">Address</label>
                <input type="text" name="address" value="{{ $companyDetails->address}}" > <br>
                <label for="">Zip Code</label>
                <input type="number" name="zip_code" value="{{ $companyDetails->zip_code }}"> <br>
                <label for="">Company email</label>
                <input type="email" name="compayEmail" value="{{ $companyDetails->email}}"> <br>
                
                <input type="submit" value="Update">
                
            </form>
        </section>

    </div>
    <div id="results"></div>
    
    
@endsection
@section('scripts')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        /* Wait for the page to be loaded/ready */
        $(function() {
            $('#updateProfile').submit(function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                // Ajax call
                $.ajax({
                        url: "update",
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
    


