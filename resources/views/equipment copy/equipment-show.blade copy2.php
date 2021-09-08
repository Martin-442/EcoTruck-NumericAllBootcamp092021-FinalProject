<x-form-fullscreen>
    <x-slot name="content">  

    <h1>Equipments Details Page</h1>
    <hr>
    <p><strong>Type : </strong> {{$equipment->truck_type}}</p>
    <p><strong>Brand : </strong> {{$equipment->brand}}</p>
    <p><strong>Model: </strong> {{$equipment->model}}</p>
    <p><strong>Year : </strong> {{$equipment->year}}</p>
    <p><strong>Fuel : </strong> {{$equipment->fuel}}</p>
    <p><strong>Mileage : </strong> {{$equipment->mileage}}</p>
    <p><strong>Capacity : </strong> {{$equipment->capacity}}</p>
    <p><strong>Location : </strong> {{$equipment->truck_location}}</p>
    <p><strong>City : </strong> {{$equipment->city}}</p>
    <p><strong>Postal Code : </strong> {{$equipment->postal_code}}</p>
    <p><strong>Specification : </strong> {{$equipment->specification}}</p>
    <hr>

    </x-slot>
</x-form-fullscreen>


