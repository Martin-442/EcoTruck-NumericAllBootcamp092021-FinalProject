<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container {
            width: 400px;
            height: 200px;
            margin: 20px auto;
            border-left: 1px solid black;
            border-bottom: 1px solid black;
            display: flex;
            gap: 1px;
            justify-content:flex-start;
        }
        .data {
            width: 3px;
            background-color:brown;
            align-self: flex-end;
        }
        .data001 { height: 100px; }
        .data002 { height: 100px; }
        .data003 { height: 70px; }
        .data004 { height: 130px; }
        .data005 { height: 200px; }
        .data006 { height: 80px; }
        .data007 { height: 50px; }
        .data008 { height: 20px; }
        .data009 { height: 40px; }
        .data010 { height: 100px; }
        .data011 { height: 100px; }
        .data012 { height: 100px; }
        .data013 { height: 100px; }
        .data014 { height: 100px; }
        .data015 { height: 100px; }
        .data016 { height: 100px; }
        .data017 { height: 100px; }
        .data018 { height: 100px; }
        .data019 { height: 100px; }
        .shortest {
            background-color: green;
        }
    </style>
</head>
<body>
<h1>Welcome to EcoTruck</h1>
<h2>Dump Truck Aggregation for a cleaner construction business</h2>
<a href="{{ URL::route('register') }}">Register as Provider</a><br>
<a href="{{ URL::route('register') }}">Register as Contracter</a><br>
<!-- <a href="{{ URL::route('register') }}">Admin</a><br> -->
<br>
<a href="{{ URL::route('login') }}">Login</a>
<hr>
<!--  .container>.data.data$$$*20  -->
<div class="container">
    <div class="data data001" style="height: 60px"><div class="shortest" style="height: 20px;"></div></div>
    <div class="data data002"><div class="shortest" style="height: 40px;"></div></div>
    <div class="data data003"><div class="shortest" style="height: 20px;"></div></div>
    <div class="data data004"></div>
    <div class="data data005"></div>
    <div class="data data006"></div>
    <div class="data data007"></div>
    <div class="data data008"></div>
    <div class="data data009"></div>
    <div class="data data010"></div>
    <div class="data data011"></div>
    <div class="data data012"></div>
    <div class="data data013"></div>
    <div class="data data014"></div>
    <div class="data data015"></div>
    <div class="data data016"></div>
    <div class="data data017"></div>
    <div class="data data018"></div>
    <div class="data data019"></div>
    <div class="data data020"></div>
</div>
<?php
$varible = array(
    'data1' => 300;
    'data2' => 200;
)
foreach ($varible as $key => $value) {
    $text[] = '<div class="data data" style="height: '.$value->data1.'px"><div class="shortest" style="height: '.$value->data2.'px;"></div></div>';
}
explode('<br>', $text);
?>
<hr>
<script type="text/javascript" src="https://apiv3.geoportail.lu/apiv3loader.js"></script>
<script>
var map12 = new lux.Map({
  target: 'map12',
  bgLayer: 'basemap_2015_global',
  zoom: 17
});

lux.geocode({
  num: 54,
  street: 'avenue gaston diderich',
  zip: 1420,
  locality: 'luxembourg'
}, function(position) {
  map12.showMarker({
    position: position,
    autoCenter: true,
    positioning: 'center-center',
    iconURL: '/proj/1.0/build/apidoc/examples/lion.png'
  });
});

console.log(map12);
</script>
</body>
</html>
