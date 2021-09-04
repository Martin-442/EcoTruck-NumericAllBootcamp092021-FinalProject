@extends('layouts.mytemplate')

@section('title', 'All trucks')

@section('content')
<a href="{{ route('company.profile') }}">Profile</a>
<a href="{{ route('add.booking') }}">Add new Booking</a>
@if (empty($bookings))
    <p>You have no reservations yet</p>
@endif
<div class="container">

    <div class="col-6 offset-md-2">
    
        <table class="table table-hover">
          <thead>
            <tr>
              
              <th scope="col">construction site </th>
              <th scope="col">Dump site</th>
              <th scope="col">Booking date</th>
              <th scope="col">Time</th>
              <th scope="col">Price</th>
              <th scope="col">Description</th>
            </tr>
          </thead>
          <tbody>
          @if (empty($bookings))
            <p>You have no reservations yet</p>
            @endif
              @foreach ($bookings as $booking)
            <tr>
              <td>{{ $booking->construction_site}}</td>
              <td>{{ $booking->dump_site}}</td>
              <td>{{ $booking->booking_date}}</td>
              <td>{{ $booking->time}}</td>
              <td>{{ $booking->price}}</td>
              <td>{{ $booking->description}}</td>
            
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
    
</div>





<hr>
    
@endsection