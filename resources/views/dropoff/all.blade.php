@extends('layouts.dropoff-template')

@section('title', 'Dropoff locations')

@section('navigation')
    @include('dropoff.navigation') <!-- same directory "navigation.blade.php" -->
@endsection

@section('content')
    @if ($username = Session::get('username'))
        <p style="color:green">{{ $username }}</p>
    @endif

    @if ($message = Session::get('success'))
        <p style="color:green">{{ $message }}</p>
    @endif

    @foreach ($dropoffall as $dropoff)
        <p><strong>ID: </strong> {{ $dropoff->id }}</p>
        <p><strong>Name: </strong> {{ $dropoff->name }}</p>
        <p><strong>Location: </strong> {{ $dropoff->location_id }}</p>
        <p><strong>Description: </strong> {{ $dropoff->description }}</p>
        <!-- creating link using the name of the route (check web.php file)  -->
        <a href="{{ route('dropoff.update', [$dropoff->id]) }}">Edit</a>
        <a href="{{ route('dropoff.delete', [$dropoff->id]) }}">Delete</a>
        <a href="{{ route('dropoff.detail', [$dropoff->id]) }}">Details</a>
        <hr>
    @endforeach
@endsection
