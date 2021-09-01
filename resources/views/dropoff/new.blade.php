@extends('layouts.dropoff-template')

@section('title', 'Dropoff locations')

@section('navigation')
    @include('dropoff.navigation') <!-- same directory "navigation.blade.php" -->
@endsection

@section('content')

<h3>Add a new dropoff location</h3>

    <!-- https://ekimunyime.medium.com/working-with-forms-in-laravel-8-a28283301622 -->
    <!-- https://laravelcollective.com/docs/6.x/html -->
    <!-- composer require laravelcollective/html -->
    {!! Form::open(['url' => '']) !!}
        {{ Form::token() }}
        {{ Form::text('name', '', $attributes = ['id'=>'name', 'placeholder' => 'Drop-Off loaction name']) }}
        {{ Form::label('name','Name *') }} <br>

        {{ Form::text('description', '', $attributes = ['id'=>'description', 'placeholder' => 'Description']) }}
        {{ Form::label('description','Description *') }} <br>

        {{ Form::select('location_id', $locationsFormArray, $attributes = ['id'=>'location_id', 'class' => 'form-control', 'placeholder' => 'Select a yard site']) }}
        {{ Form::label('location_id','Location *') }}
    {!! Form::close() !!}

@endsection
