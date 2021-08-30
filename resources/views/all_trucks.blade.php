@extends('layouts.mytemplate')

@section('title', 'All trucks')

@section('content')

    <h3>All trucks</h3>

    @if ($message = Session::get('success'))
        <p style="color:green">{{ $message }}</p>
    @endif

    @foreach ($flowers as $flower)
        <p><strong>Name : </strong> {{ $flower->name }}</p>
        <p><strong>Price : </strong> {{ $flower->priceFormatted }}</p>
        <p><strong>Updated at : </strong> {{ $flower->updated_at }}</p>
      
        <a href="{{ route('update.flower', [$flower->id]) }}">Edit</a>
        <a href="{{ route('delete.flower', [$flower->id]) }}">Delete</a>
        <a href="{{ route('details.flower', [$flower->id]) }}">Details</a>
        <hr>
    @endforeach
@endsection