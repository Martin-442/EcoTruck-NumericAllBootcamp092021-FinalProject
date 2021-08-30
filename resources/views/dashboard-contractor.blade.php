@extends('layouts.mytemplate')

@section('title', 'All trucks')

@section('content')
<a href="{{ route('add.booking') }}">Add new Booking</a>
    <h3>All trucks</h3>

    @if (empty($bookings))
        <p>You have no reservations yet</p>
    @endif

    @foreach ($bookings as $booking)
        <p><strong>construction site : </strong> {{ $booking->construction_site }}</p>
        <p><strong>Dump site : </strong> {{ $booking->dump_site }}</p>
        <p><strong>Booking date: </strong> {{ $booking->booking_date }}</p>
  

        <hr>
    @endforeach
@endsection