<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Equipment') }}

        </h2>
    </x-slot>
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

                    <p><strong>Type : </strong> {{$equipment->truck_type}}</p>
                    <p><strong>Mileage: </strong> {{$equipment->mileage}}</p>
                    <p><strong>City: </strong> {{ $equipment->city }}</p>
                    <!-- creating link using the name of the route (check equipment.php file)  -->
                    <a style="padding:5px;" href="{{ route('update.equipment-update', [$equipment->id])}}">Edit</a>
                    <a style="padding:5px;" href="{{ route('delete.equipment', [$equipment->id])}}">Delete</a>
                    <a style="padding:5px;" href="{{ route('equipment.equipment-show', [$equipment->id])}}">Details</a>
                    <hr>
                </div>
                @endforeach
        </div>
    </div>

</x-app-layout>

</body>
</html>





