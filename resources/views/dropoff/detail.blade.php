@extends('layouts.dropoff-template')

@section('title', 'Dropoff locations')

@section('navigation')
    @include('dropoff.navigation') <!-- same directory "navigation.blade.php" -->
@endsection

@section('content')

<p><strong>ID: </strong> {{ $dropoff->id }}</p>
<p><strong>Name: </strong> {{ $dropoff->name }}</p>
<p><strong>Location: </strong> {{ $dropoff->location_id }}</p>
<p><strong>Description: </strong> {{ $dropoff->description }}</p>

<hr>
<a href="{{ route('dropoff.update', [$dropoff->id]) }}">Update</a>


@endsection
