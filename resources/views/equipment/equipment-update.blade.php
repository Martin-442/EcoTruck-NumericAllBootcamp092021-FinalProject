<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Update Equipment</h3>

    <form action="" method="post">
    @csrf <!-- CSRF Use for sequrity in Laravel -->

    <input type="text" name="truck_type" placeholder="Truck Type" value="{{$equipment->truck_type}}"><br>
    <input type="number" name="mileage" placeholder="Mileage" value="{{$equipment->mileage}}"><br>
    <input type="submit" value="Update Equipment">
</form>

</body>
</html>

