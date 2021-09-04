<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/equi-update.css') }}">
</head>

<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Equipment and Booking') }}
        </h2>
    </x-slot>

        @if($message = Session::get('success'))
            <p style="color:green">{{$message}}</p>
        @endif

    <a href="{{ URL::route('equipment.equipment-new') }}">Add new equipment</a><br>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Available Equipments:
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            @foreach ($equipments as $equipment)
                <div class="p-6 bg-white border-b border-gray-200">
                    <p><strong>Brand: </strong> {{$equipment->brand}}</p>
                    <p><strong>Model: </strong> {{$equipment->model}}</p>
                    <p><strong>Mileage: </strong> {{$equipment->mileage}}</p>
                    <p><strong>City: </strong> {{ $equipment->city }}</p>
                    <!-- creating link using the name of the route (check equipment.php file)  -->
                    <a style="padding:5px; color: green" href="{{ route('equipment.equipment-show', [$equipment->id])}}">Details</a>
                    <a style="padding:5px; color:orange" href="{{ route('update.equipment-update', [$equipment->id])}}">Edit</a>
                    <a style="color:red; margin: 200px;" href="{{ route('delete.equipment', [$equipment->id])}}">Delete this equipment ?</a>
                    <hr>
                </div>
            @endforeach
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        Current Bookings:
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
            @if (empty($bookings))
            <p>You have no reservations yet</p>
            @endif

            @foreach ($bookings as $booking)
            <p><strong>Booking date: </strong> {{ $booking->booking_date }}</p>
            <p><strong>Construction site : </strong> {{ $booking->construction_site }}</p>
            <p><strong>Dump site : </strong> {{ $booking->dump_site }}</p>
            <hr>
            @endforeach
        </div>
        </div>
    </div>
    <hr>

</x-app-layout>

</body>
</html>





