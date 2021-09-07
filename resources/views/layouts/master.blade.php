<!-- app/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Simple CMS" />
    <meta name="author" content="Sheikh Heera" />
    

    <title>EcoTruck</title>
    
    <!-- Scripts -->
    <script src="{{ base_path().'/storage/bootstrap/js/bootstrap.min.js' }}'), '/') }}" defer></script>

    <!-- Styles -->
    <link href="{{ base_path().'/storage/bootstrap/css/bootstrap.min.css' }}" rel="stylesheet">
</head>

@yield("content")

