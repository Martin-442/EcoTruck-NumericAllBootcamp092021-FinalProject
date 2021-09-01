<?php

namespace App\Http\Controllers;
@include(public_path('/resources/css/styles.css'));


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
    
    public function shortRoute(){
        $serie_Number = 1;
        $number_Of_Run = 10;
        
        while ($serie_Number<=$number_Of_Run)
        {   
            echo "<b>Serie number $serie_Number</b><br>";
            $arrayTL = array();
            $arrayDY = array();
            $arrayRoute = array();
            $numberofTest =5;
            $route = 0;
            $y = 1;
            
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

                    /*echo ' lenght Route n°: '. $y. ' is: ' .  $route. ' From: '.
                    $this->getLocationName($randomTL). ' to '. 
                    $this->getLocationName($randomDY). ' via '.
                    $this->getLocationName($randomCS). '<br>' ;
                    $y++;*/
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
                        echo '<B>'.$arrayRoute[$i]['lenght'].'<B>';
                        echo '</td>';
                    echo '</tr>';
                }
            echo '</table>';
                /*echo "Truck Location is: ".$arrayRoute[$i]['Turck Location'].
                ' Construction Site is:  '.'<b>'.$arrayRoute[$i]['Construction Site'].'</b>'.
                ' Dump Yard is '.$arrayRoute[$i]['Dum yard'].
                ' lenght:'.$arrayRoute[$i]['lenght'];
                echo '<br>';*/
            /*echo '<pre>';
            echo 'Routes Array sorted <br>';
            var_dump($arrayRoute);
            echo '</pre>';*/
            $this->show_Statistique($arrayRoute);

        }
        /*
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
    } // end Function shortRoute

    public function show_Statistique($arrayRoute){
        echo '<br><b> STATISTIC</b><br>';
        $route_Difference = $arrayRoute[count($arrayRoute)-1]['lenght']-$arrayRoute[0]['lenght'];
        echo 'The shorttest route is: '.$arrayRoute[0]['lenght'].'<br>';
        echo 'The longgest route is: '.$arrayRoute[count($arrayRoute)-1]['lenght'].'<br>';
        echo 'The difference beetwen shorttest and longgest route is: '.$route_Difference.'<br>';
        echo 'You make a gain of: '.$arrayRoute[0]['lenght'] * 100 / $arrayRoute[count($arrayRoute)-1]['lenght']. ' %'.'<br>';
        echo 'The planet is save of about: '.$route_Difference * $this->kilometer_consumtion.' g CO2'.'<br><br>';
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


    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
