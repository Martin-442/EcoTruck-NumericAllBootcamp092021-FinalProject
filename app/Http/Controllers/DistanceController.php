<?php

namespace App\Http\Controllers;
@include(public_path('/public/styles/styles.css'));


use App\Models\Distance;
use App\Models\Stop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;


class DistanceController extends Controller
{
    public $kilometer_consumtion = 30;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //call ur function + get result
        return view('distance');
    }

    public function getLength($from_stop_id, $to_stop_id) {
        if ($from_stop_id == $to_stop_id)
            return 0;
        $distance = Distance::where('id', '=', $from_stop_id)->first();
        //dd($distance->lengths_json);

        foreach (json_decode($distance->lengths_json) as $key => $value) {
            if ($value->to_stop_id == $to_stop_id) {
                return $value->length;
            }
        }
    }

    private function getLocationName($id) {
        $location = Stop::where('id', '=', $id)->first();
        return $location->stop_org;
    }

    public function shortRoute($amount=10){
        $output = '';
        ob_start();

        $serie_Number = 1;
        $number_Of_Run = $amount;
        $route_difference_statistic = array();

        while ($serie_Number<=$number_Of_Run)
        {
            echo "<b>Serie number $serie_Number</b><br>";
            $arrayTL = array();
            $arrayDY = array();
            $arrayRoute = array();
            $numberofTest =5;
            $route = 0;
            $y = 1;
            $route_difference_total = 0;

            // choose randomly a Construction Site (location in DB)
            $randomCS = rand(1, 985);

            //choose randomly "5" Dump Yard
            // append the locations in the arrays
            for($i= 0; $i<$numberofTest; $i++){
                $arrayDY[] = rand(1, 985); // 985<
            }

            //choose randomly "5" Truck Location
            // append the locations in the arrays
            for($i= 0; $i<$numberofTest; $i++){
                $randomTL = rand(1, 985); // 985
                $arrayTL[] =  $randomTL;
                $z=$y+5;
                foreach ($arrayDY as $randomDY) {
                    $route = $this->getLength($randomTL , $randomCS) +
                    $this->getLength($randomCS, $randomDY )+
                    $this->getLength($randomDY, $randomTL);


                    //$arrayRoute[]= $route;
                    //array contain all the differents routes
                    //new route are added to the array
                    $arrayRoute[] = array('Turck Location'=> $this->getLocationName($randomTL), 'Construction Site'=>$this->getLocationName($randomCS), 'Dum yard'=>$this->getLocationName($randomDY),'lenght'=> $route);

                }
            }
            $serie_Number++;
            // The Route array ist sort reggardind the Value of length
            foreach ($arrayRoute as $key => $row) {
                $lenght[$key] = $row['lenght'];
            }
            array_multisort($lenght, SORT_ASC, $arrayRoute);

            $array_lenght = count($arrayRoute)-1;
             echo "<table style='color:blue; width: 75%; text-align: left;'>";
                    echo '<tr>';
                        echo '<th>';
                        echo'Truck Location';
                        echo '</th>';
                        echo '<th>';
                        echo 'Construction Site';
                        echo '</th>';
                        echo '<th>';
                        echo 'Dump Yard';
                        echo '</th>';
                        echo '<th>';
                        echo 'Length';
                        echo '</th>';
                    echo '</tr>';
                for($i=0; $i<=$array_lenght; $i++){
                    echo '<tr>';
                        echo '<td>';
                        echo $arrayRoute[$i]['Turck Location'];
                        echo '</td>';
                        echo '<td>';
                        echo $arrayRoute[$i]['Construction Site'];
                        echo '</td>';
                        echo '<td>';
                        echo $arrayRoute[$i]['Dum yard'];
                        echo '</td>';
                        echo '<td>';
                        echo '<B>'.$arrayRoute[$i]['lenght'].' </B>  km';
                        echo '</td>';
                    echo '</tr>';
                }
            echo '</table>';

            $route_difference_array[] = [
                'total' => $this->show_Statistique($arrayRoute),
                'shortest' => $arrayRoute[0]['lenght'],
                'longest' => $arrayRoute[count($arrayRoute)-1]['lenght'],
            ];

        } // end while on $number_Of_Run


        // foreach ($route_difference_statistic as $value) {
        //     $route_Value_Gain += $value;
        // }
        //echo  $route_Value;
        ?>
        <!-- <div style="background-color: white;"><h1>Diagramme Km Gain</h1>
           <div style=" width: 300px; height: 300px; border-radius: 50%; background: yellowgreen; background-image: linear-gradient(to right, transparent 50%, #655 0);"></div>
        </div> -->
        <?php
        /*        echo '<pre>';
        var_dump($arrayRoute);
        echo '</pre>';

        // The Route array ist sort reggardind the Value of length
        foreach ($arrayRoute as $key => $row) {
            $lenght[$key] = $row['lenght'];
        }
        array_multisort($lenght, SORT_ASC, $arrayRoute);
        echo '<pre>';
        echo 'Routes Array sorted <br>';
        var_dump($arrayRoute);
        echo '</pre>';*/
        //return $arrayRoute;           --------------------return---------------

        $output = ob_get_contents();
        ob_end_clean();
        return view('distance_statistics', [
            'route_difference_array' => $route_difference_array,
            'arrayRoute' => $arrayRoute,
            'outputXYZ' => $output,
            'output_gain' => $numberofTest * $numberofTest * $number_Of_Run,
        ]);

    } // end Function shortRoute



    public function show_Statistique($arrayRoute){
        echo '<br><b> STATISTIC</b><br>';
        $route_Difference = $arrayRoute[count($arrayRoute)-1]['lenght']-$arrayRoute[0]['lenght'];
        echo 'The shorttest route is: '.$arrayRoute[0]['lenght'].'<br>';
        echo 'The longgest route is: '.$arrayRoute[count($arrayRoute)-1]['lenght'].'<br>';
        echo 'The difference beetwen shorttest and longgest route is: '.$route_Difference.'<br>';
        echo 'You make a gain of: '.$arrayRoute[0]['lenght'] * 100 / $arrayRoute[count($arrayRoute)-1]['lenght']. ' %'.'<br>';
        //echo 'The planet is save of about: '.$route_Difference * $this->kilometer_consumtion.' g CO2'.'<br><br>';

        //-------------------------------------------------------------03 septembre---------------------
        ?>
        <!-- <pre>
        <h1>Diagramme</h1>
        <p>kilometre</p>
        <?php
        $data1 = $arrayRoute[count($arrayRoute)-1]['lenght'];?>
        <?php
        $data2 = $arrayRoute[0]['lenght'];?>

        <dl id="csschart">
            <dt>Jouree 1</dt>
            <dd><span class="long" style= "height: <?php echo $data1; ?>px"><em class="middle"><?php echo $data1; ?></em><em class="short" style="height:<?php echo $data2; ?>px;"><?php echo $data2; ?></em></span></dd>
        </dl>
        <p>serie ....</p>
        </pre> -->
        <?php
        //-------------------------------------------------------------fin 03 septembre-----------------

        return $route_Difference;

    }

    public function km_Gain($allRoute){

    }

    public function bestEquipment($fuel, $mileage){
        $penality= 0;
        // electric=1, gaz = 2, essence = 3, diesel= 4;
        switch($fuel){
            case 1:
                $penality+=0;
            break;
            case 2:
                $penality+=1;
            break;
            case 3:
                $penality+=2;
            break;
            case 4:
                $penality+=3;
            break;
        }

        if ($mileage<300)
            $penality+=0;
        if ($mileage<300 && $mileage<400)
            $penality+=1;
        if ($mileage<=400 && $mileage<450)
            $penality+=2;
        if ($mileage<=450 && $mileage<500)
            $penality+=3;
        else
            $penality+=4;
        return $penality;
    }

}
