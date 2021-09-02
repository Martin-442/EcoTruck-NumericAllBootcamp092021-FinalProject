@extends('layouts.dropoff-template')

@section('title', 'Dropoff locations')

@section('navigation')
    @include('dropoff.navigation') <!-- same directory "navigation.blade.php" -->
@endsection

@section('content')

    <h3>Update dropoff location</h3>

    <div id="results"></div>
    <!-- https://ekimunyime.medium.com/working-with-forms-in-laravel-8-a28283301622 -->
    <!-- https://laravelcollective.com/docs/6.x/html -->
    <!-- composer require laravelcollective/html -->

    {{implode ('', $errors->all ('<li>: message</li>'))}}

    {!! Form::open(['url' => '']) !!}
        {{ Form::token() }}
        {{ Form::text('name', $dropoff->name, $attributes = ['id'=>'name']) }}
        {{ Form::label('name','Name *') }} <br>

        {{ Form::text('description', $dropoff->description, $attributes = ['id'=>'description']) }}
        {{ Form::label('description','Description *') }} <br>

        {{ Form::select('location_id', $locationsFormArray, $dropoff->location_id, $attributes = ['id'=>'location_id', 'class' => 'form-control', 'placeholder' => 'Select a yard site']) }}
        {{ Form::label('location_id','location_id*') }}
    {!! Form::close() !!}

@endsection

@section('scripts')
@endsection
