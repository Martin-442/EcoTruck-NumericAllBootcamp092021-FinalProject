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
        @if(Session::has('providerUser'))
            <div class="">
                <ul>
                    <li>{{ session()->get('providerUser')->first_name }}</li>
                    <li>{{ session()->get('providerUser')->last_name }}</li>
                    <li>{{ session()->get('providerUser')->email }}</li>
                    <li>{{ session()->get('providerCompany')->company_name }}</li>
                    <li>{{ session()->get('providerCompany')->address }}</li>
                    <li>{{ session()->get('providerCompany')->city }}</li>
                    <li>{{ session()->get('providerCompany')->zip_code }}</li>
                    <li>{{ session()->get('providerCompany')->phone }}</li>
                </ul>
            </div>
        @endif

        <!-- https://laravelcollective.com/docs/6.x/html -->
        <!-- composer require laravelcollective/html -->
        {!! Form::open(['method' => 'POST']) !!}
            {{ Form::token() }}
            {!! Form::password('password', $attributes = ['id'=>'password', 'class' => '', 'placeholder' => 'Password']) !!}
            {!! Form::label('password','Password *', ['class' => '']) !!} <br>

            {!! Form::password('password_confirmation', $attributes = ['id'=>'password_confirmation', 'class' => '', 'placeholder' => 'Password confirmation']) !!}
            {!! Form::label('password_confirmation','Confirm your Password *', ['class' => '']) !!}

            <a href="{{ URL::route('register.provider-step2') }}" class="btn btn-default">Back</a>
            {!! Form::button('Submit', $options = ['class' => 'btn btn-default', 'type' => 'submit']) !!}
        {!! Form::close() !!}
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
