<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- Make the variable optional in the blade template. Replace << $request }} with << $request ?? '' }} -->
    <div>Please login as {{ session('missingAuth') }} to access the page</div>
    <div>{{ $request ?? '' }}</div>
    <div>{{ $login ?? '' }}</div>
    <hr>
    <div><a href="{{ url('/') }}">Homepage</a></div>
    <div><a href="{{ url('/login') }}">Login</a></div>

    <!-- To show the rendered HTML you should use <!! $variable->coontent !!} in your view, and this gonna convert your HTML text to render -->
</body>
</html>
