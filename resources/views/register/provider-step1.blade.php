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
        {!! Form::open(['route' => 'register.provider-step1', 'method' => 'POST']) !!}
            {!! Form::token() !!}
            {!! Form::text('first_name', empty(session()->get('providerUser')->first_name) ? '' : session()->get('providerUser')->first_name, $attributes = ['id'=>'first_name', 'class' => '', 'placeholder' => 'First Name ']) !!}
            {!! Form::label('first_name','First Name *', ['class' => '']) !!} <br>

            {!! Form::text('last_name', empty(session()->get('providerUser')->last_name) ? '' : session()->get('providerUser')->last_name, $attributes = ['id'=>'last_name', 'class' => '', 'placeholder' => 'Last Name']) !!}
            {!! Form::label('last_name','Last Name *', ['class' => '']) !!} <br>

            {!! Form::email('email', empty(session()->get('providerUser')->email) ? '' : session()->get('providerUser')->email, $attributes = ['id'=>'email', 'class' => '', 'placeholder' => 'Email ']) !!}
            {!! Form::label('email','Email *', ['class' => '']) !!} <br>

            {!! Form::button('Cancel', $options = ['class' => 'btn', 'type' => 'submit', 'onclick' => "return confirm('Are you sure?')"]) !!}
            {!! Form::button('Next', $options = ['class' => 'btn', 'type' => 'submit']) !!}
        {!! Form::close() !!}
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
