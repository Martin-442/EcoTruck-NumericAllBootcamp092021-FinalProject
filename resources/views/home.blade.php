<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <img src="/public/images/dumptruck.jpg"alt=>
</head>
<body>
<h1>Welcome to ECO Truck Pooling</h1>

<a href="{{ URL::route('register') }}">Register</a><br>

<!-- AS WE HAVE ONLY ONE FORM FOR Register, below links not reqired -->

<!-- <a href="{{ URL::route('register') }}">Register as Provider</a><br> -->
<!-- <a href="{{ URL::route('register') }}">Register as Contracter</a><br> -->
<!-- <a href="{{ URL::route('register') }}">Admin</a><br> -->
<br>
<a href="{{ URL::route('login') }}">Login</a>
</body>
</html>
