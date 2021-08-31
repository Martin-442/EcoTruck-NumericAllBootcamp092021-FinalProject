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
    <p><strong>Type : </strong> {{$equipment->truck_type}}</p>
    <p><strong>Location : </strong> {{$equipment->city}}</p>
    <p><strong>Postal Code : </strong> {{$equipment->postal_code}}</p>
    <p><strong>Specification : </strong> {{$equipment->specification}}</p>
    <hr>

</body>
</html>
