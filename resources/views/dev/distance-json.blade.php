<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container {
            width: 900px;
            display:table;
            margin: 20px auto;
            padding: 20px;
            background-color:rgb(38, 64, 65);
            color: white;
            border-radius: 12px;
        }
        article {
            display:table-row;
            width:auto;
            margin-bottom: 10px;
            border-bottom: 1px dashed rgb(197, 197, 206);
        }
        /* article div {
            display:table-column;
        }
        article div:first-of-type {
            width: 100px;
        } */
        .div-table {
            display: table;
            width: auto;
            border-spacing: 5px; /* cellspacing:poor IE support for  this */
        }
        .div-table-row {
            display: table-row;
            width: auto;
            clear: both;
        }
        .div-table-row div {
            float: left; /* fix for  buggy browsers */
            display: table-column;
            width: 200px;
        }
    </style>
</head>
<body>

    <div class="container">
        <article class="div-table-row">
            <div>Truck location</div>
            <div>Construction site</div>
            <div>Dump yard</div>
            <div>Roundtrip</div>
        </article>

        @foreach ($distance as $roundtrip)
        <article class="div-table-row">
            <div>{{ $roundtrip['TL']['name'] }}</div>
            <div>{{ $roundtrip['CS']['name'] }}</div>
            <div>{{ $roundtrip['DY']['name'] }}</div>
            <div>{{ $roundtrip['length'] }}</div>
        </article>
        @endforeach
    </div>
<hr>
<!--
<pre><?php var_dump($distance); ?></pre>
-->
</body>
</html>
