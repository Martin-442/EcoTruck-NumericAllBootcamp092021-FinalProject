<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/public/equi-update.css">
</head>
<body>
    <h3>Update Equipment</h3>
    <hr>

    <form action="" method="post">
    @csrf <!-- CSRF Use for sequrity in Laravel -->

    <label for="truck_type">Truck Type:</label><input type="text" value="{{$equipment->truck_type ?? ''}}"><br>
    <label for="brand">Brand:</label><input type="text" name="brand" placeholder="Brand" value="{{$equipment->brand}}"><br>
    <label for="model">Model:</label><input type="text" name="model" placeholder="Model" value="{{$equipment->model}}"><br>
    <label for="year">Year:</label><input type="number" name="year" placeholder="Year" value="{{$equipment->year}}"><br>
    <label for="fuel">Fuel:</label><input type="text" name="fuel" placeholder="Fuel" value="{{$equipment->fuel}}"><br>
    <label for="mileage">Mileage:</label><input type="text" name="mileage" placeholder="Mileage" value="{{$equipment->mileage}}"><br>
    <label for="capacity">Capacity:</label><input type="number" name="capacity" placeholder="Capacity" value="{{$equipment->capacity}}"><br>
    <label for="truck_location">Truck Location:</label><input type="text" name="truck_location" placeholder="Truck Location" value="{{$equipment->truck_location}}"><br>
    <label for="city">City:</label><input type="text" name="city" placeholder="City" value="{{$equipment->city}}"><br>
    <label for="postal_code">Postal_code:</label><input type="number" name="postal_code" placeholder="Postal Code" value="{{$equipment->postal_code}}"><br>
    <label for="specification">Specification:</label><input type="text" name="specification" placeholder="Specification" value="{{$equipment->specification}}"><br>
    <input type="submit" value="Update Equipment">
</form>

</body>
</html>

