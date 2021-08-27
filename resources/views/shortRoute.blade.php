<h1>shortest route</h1>
<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;

    $serie_Number = 1;
    while ($serie_Number<6)
    {   echo "Serie number $serie_Number<br>";
        $arrayTL = array();
        $arrayDY = array();
        $arrayRoute = array();
        $numberofTest =5;
        $route = 0;
        //choose randomly "5" Truck Location AND "5" Dump Yard
        // append the locations in the arrays 
        for($i= 0; $i<$numberofTest; $i++){
            $randomTL = rand(1, 3); // 985
            $randomDY = rand(1, 3); // 985
            $TL_id = DB::select("SELECT id FROM stop WHERE id = $randomTL")[0]->id;
            $DY_id = DB::select("SELECT id FROM stop WHERE id = $randomDY")[0]->id;
            $arrayTL[] = $TL_id;
            $arrayDY[] = $DY_id;
        }
        echo '<pre>';
        echo 'just test <br>';
        var_dump($arrayTL);
        echo '</pre>';
        echo 'Fin just test <br>';
        // choose randomly a Construction Site (location in DB)
        $randomCS = rand(1, 3);
        // the number of the route
       
        foreach ($arrayTL as $valueTL) {
            echo 'just test TL <br>';
            echo 'id TL ist: '.$valueTL.'<br>';
            echo 'Fin just test <br>';
            echo '-----------';
            foreach($arrayDY as $valueDY){
                echo 'just test DY <br>';
                echo 'id DY ist: '.$valueDY.'<br>';
                echo 'Fin just test <br>';
                $route = (DB::select("SELECT lenght FROM distance WHERE from_stop_id = $valueTL AND to_stop_id = $randomCS")[0]->lenght);
                $route += (DB::select("SELECT lenght FROM distance WHERE from_stop_id = $randomCS AND to_stop_id = $valueDY")[0]->lenght);
                $route += (DB::select("SELECT lenght FROM distance WHERE from_stop_id = $valueDY AND to_stop_id = $valueTL")[0]->lenght);

                //array contain all the differents routes
                //new route are added to the array
                $arrayRoute[] = array('TL'=> $valueTL, 'CS'=>$randomCS, 'DY'=>$valueDY,'lenght'=> $route);
            }

            echo '<pre>';
            echo 'Routes array <br>';
            var_dump($arrayRoute);
            echo '</pre>';
            echo '<------------------------>';
            echo '<br>';
        }

        // The array ist sort regardind the Value of lengnt
        foreach ($arrayRoute as $key => $row) {
        $lenght[$key] = $row['lenght'];
        }
        array_multisort($lenght, SORT_ASC, $arrayRoute);
        echo '<pre>';
            echo 'Routes Array sorted <br>';
            var_dump($arrayRoute);
            echo '</pre>';
        $serie_Number++;
        
    }

?>