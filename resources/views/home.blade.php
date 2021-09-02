<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>
<h1>Welcome to ECO Truck Pooling</h1>

<a href="{{ URL::route('register') }}">Register</a><br>
<a href="{{ URL::route('login') }}">Login</a>

<h4>About us:</h4>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta tenetur nulla delectus ducimus consequuntur quas commodi dolore quasi, maxime beatae ab vero et, ut rerum cupiditate explicabo, doloremque facere eligendi expedita laudantium. Accusamus ut facere, omnis odio quaerat cupiditate eius nihil rerum nemo modi, voluptatem dicta quo adipisci, magnam commodi.
</p>

<!-- AS WE HAVE ONLY ONE FORM FOR Register, below links not reqired -->

<!-- <a href="{{ URL::route('register') }}">Register as Provider</a><br> -->
<!-- <a href="{{ URL::route('register') }}">Register as Contracter</a><br> -->
<!-- <a href="{{ URL::route('register') }}">Admin</a><br> -->


</body>
</html>
