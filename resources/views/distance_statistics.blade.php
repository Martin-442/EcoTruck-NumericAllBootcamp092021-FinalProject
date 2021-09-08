<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Histogramme en CSS</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="CSS histogramme" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/distance.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
            .statistic {
                /* width: 500px; */
                height: 300px;
                margin: 30px auto;
                border-bottom: 1px solid grey;
                border-left: 1px solid grey;
                display: flex;
                flex-direction: row;
                gap: 1px;
                justify-content:space-evenly;
            }
            .container {
                /* width: 500px; */
                margin: 30px auto;
            }
            .data {
                /*background-color: lightcoral;*/
                align-self: flex-end;
            }
            .data_short {
                /*background-color: lightgreen;*/
                background-color: #8dc63f;
                width: 6px;
            }
            .data_long {
                /*background-color: lightgreen;*/
                background-color: rgb(200, 1, 1);
                width: 2px;
            }
            .data_avg {
                /*background-color: lightgreen;*/
                background-color: rgb(202, 207, 153);
                width: 4px;
            }
            .data_gap {
                /*background-color: lightgreen;*/
                background-color: white;
                width: 2px;
            }
        </style>
    </head>
    <body>
    <!------------------------------------------------------ -->

    <div class="container statistic" style="display:none">
        @foreach ($route_difference_array as $key => $route)
            <div class="data data{{ $key }}" style="height:{{ $route['shortest'] }}px;"><div class="data_short" style="height:{{ $route['longest'] }}px;"></div></div>
        @endforeach
        <?php
        $kilometer_consumtion = 35;
        $total = 0;
        $total_run = 0;
        foreach ($route_difference_array as $key => $value) {
            $total += $value['total'];
            $total_run = $key+1;
        }

        ?>

    </div>
    <!------------------------------------------------------ -->
    <div class="container statistic">
        @foreach ($route_difference_array as $key => $route)
            <div class="data data_short data{{ $key }}" style="height:{{ $route['shortest'] }}px;"></div>
            {{-- <div class="data data_avg data{{ $key }}" style="height:{{ $route['total'] }}px;"></div> --}}
            <div class="data data_long data{{ $key }}" style="height:{{ $route['longest'] }}px;"></div>
            <div class="data data_gap" style="height:{{ $route['longest'] }}px;"></div>
        @endforeach
        <?php
        $total = 0;
        $total_run = 0;
        foreach ($route_difference_array as $key => $value) {
            $total += $value['total'];
            $total_run = $key+1;
        }

        ?>

    </div>
    <!--diesel : 1 liter diesel is  835 grammes. Diesel is made 86.2% of carbone (C), it means 720 per liter diesel. For combustion of this C en CO2, 1920 g d'oxygène is necessary. We then have 720 + 1920 = 2640 g of  CO2 per liter diesel.
    A Truck with a comsuption of 35 litre/100km release 35L x 2640 g/L / 100 (per km) = 132 g CO2/km. -->
    <div class="container">
        <div>Total average distance between longest and shortes route after <?php echo $total_run; ?> runs: <?php echo $total / $total_run; ?> km <span class="fas fa-route"></span></div>
        <div>The planet is save of about: <?php echo round($total / $total_run * ($kilometer_consumtion*2640/100)/1000 , 2); ?> kg CO2 <span class="fas fa-smog"></span></div>
    </div>


    <hr>

    {!! $outputXYZ ?? '' !!}


    </body>

</html>
