<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- https://laravelcollective.com/docs/6.x/html -->
        <!-- composer require laravelcollective/html -->
        {!! Form::open(['route' => 'register.provider-step2', 'method' => 'POST']) !!}
            {{ Form::token() }}
            {!! Form::text('company_name', $value = session()->get('providerCompany')->company_name, $attributes = ['id'=>'company_name', 'class' => '', 'placeholder' => 'Company Name']) !!}
            {!! Form::label('company_name','Company Name *', ['class' => '']) !!} <br>

            {!! Form::text('address', $value = session()->get('providerCompany')->address, $attributes = ['id'=>'address', 'class' => '', 'placeholder' => 'Address']) !!}
            {!! Form::label('address','Address *', ['class' => '']) !!} <br>

            {!! Form::text('city', $value = session()->get('providerCompany')->city, $attributes = ['id'=>'city', 'class' => '', 'placeholder' => 'City']) !!}
            {!! Form::label('city','City *', ['class' => '']) !!} <br>

            {!! Form::text('zip_code', $value = session()->get('providerCompany')->zip_code, $attributes = ['id'=>'zip_code', 'class' => '', 'placeholder' => 'ZIP Code']) !!}
            {!! Form::label('zip_code','ZIP Coda *', ['class' => '']) !!} <br>

            {!! Form::text('phone', $value = session()->get('providerCompany')->phone, $attributes = ['id'=>'phone', 'class' => '', 'placeholder' => 'Phone']) !!}
            {!! Form::label('phone','Phone *', ['class' => '']) !!} <br>

            <a href="{{ URL::route('register.provider-step1') }}" class="btn btn-default">Back</a>
            {!! Form::button('Next', $options = ['class' => 'btn btn-default', 'type' => 'submit']) !!}
        {!! Form::close() !!}
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
