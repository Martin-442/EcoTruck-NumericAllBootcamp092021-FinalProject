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
            margin: 20px auto;
            padding: 20px;
            background-color:rgb(38, 64, 65);
            color: white;
            border-radius: 12px;
        }
        article {
            display: flex;
            flex: 1;
            gap: 20px;
            grid-auto-columns: 1fl 1fl;
            margin-bottom: 10px;
            border-bottom: 1px dashed rgb(197, 197, 206);
        }
        article div:first-of-type {
            width: 120px;
        }
    </style>
</head>
<body>
    <div class="container">
        @if(count($distances)>0)
        @foreach ($distances as $d)
        <article>
            <div>{{ $d->to_stop_id }}</div>
            <div>{{ $d->length }}</div>
        </article>
        @endforeach
        @else
            <article>
                <div>No Distances</div>
            </article>
        @endif
    </div>

</body>
</html>
