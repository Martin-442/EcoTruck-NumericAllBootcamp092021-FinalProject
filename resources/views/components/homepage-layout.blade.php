<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EcoTruck</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/themestrap.css') }}">
    <!-- https://themestr.app/theme?start=1&font=Nunito&palette=1&icons=fontawesome&border-width=3px&spacer=1.2rem&btn-border-radius=0&enable-gradients=true -->
    <!-- https://getbootstrap.com/docs/4.0/examples/blog/ -->
</head>
<body>
    <div class="container">
        {{ $header }}

{{--         << $navscroller >>
 --}}
        {{ $jumbotron }}

        <div class="row mb-2">
            {{ $providerCTA }}
            {{ $contractorCTA }}
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
