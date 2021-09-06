<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Geoportal Luxembourg</title>
    <link rel="stylesheet" type="text/css" href="https://apiv3.geoportail.lu/static-ngeo/build/apiv3.css">
    <script src="https://apiv3.geoportail.lu/static-ngeo/build/vendor.js"></script>
    <script src="https://apiv3.geoportail.lu/static-ngeo/build/apiv3.js"></script>
    <script type="text/javascript">lux.setBaseUrl('https://apiv3.geoportail.lu/', 'https');</script>
    <script type="text/javascript">lux.setI18nUrl('https://apiv3.geoportail.lu/static-ngeo/build/fr.json');</script>
    <style>
        .container, .map2c, .map2d {
            width: 500px;
            height: 600px;
        }
        .map2d {
            position:absolute;
            top: 0;
            left: 300px;
        }
    </style>
</head>
<body>
<div class="container">
    <div id="map2d" class="map2d"></div>
    <div id="info2d"><p>info</p></div>
</div>


    <script>
        let map2d = new lux.Map({
            target: 'map2d',
            bgLayer: 'basemap_2015_global',
            zoom: 9,
            //position: position2d2169
        });

    </script>

@foreach ($stops as $stop)
    <script>
        let position{{$stop['id']}} = [{{$stop['Y_RECHTS']}}, {{$stop['X_HOCH']}}];
        let name{{$stop['id']}} = "{{$stop['stop']}}";
        map2d.showMarker(
        {
            position: position{{$stop['id']}},
            positioning: 'center-center',
            // iconURL: '/media/lion.png',
            iconURL: '/media/home-solid-small.png',
            // iconURL: '/media/mountain-solid-small.png',
            // iconURL: '/media/truck-pickup-solid-small.png',
            click: false,
            target: info2d,
            html: '<p>'+name{{$stop['id']}}+'</p>'

        });

    </script>
@endforeach

</body>
</html>
