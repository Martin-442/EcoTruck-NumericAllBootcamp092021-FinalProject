<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>
    <h1>Equipments Details Page</h1>
    <hr>
    <p><strong>ID : </strong> {{$equipment->id}}</p>
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

</body>
</html>
