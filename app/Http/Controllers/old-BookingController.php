<?php

namespace App\Http\Controllers;
use App\Models\Booking;

use App\Models\Stop;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
 

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {   $company_id= auth()->user()->company_id ;
        //retrieve dump_site and construction site name
        $dump_sites=DB::select("SELECT stop.stop as dump_site  FROM `bookings`,stop WHERE bookings.dump_site_id=stop.id AND bookings.company_id=$company_id");
        $bookingList=DB::select("SELECT bookings.*,stop.stop as construction_site  FROM `bookings`,stop WHERE bookings.construction_site_id=stop.id AND bookings.company_id=$company_id");
       
        for ($i=0; $i < count($bookingList); $i++) { 
            $bookingList[$i]->dump_site=$dump_sites[$i]->dump_site;
        }
        //dd($bookingList);
        
        return view('dashboard-contractor', ['bookings' => $bookingList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $locationList=Stop::all();
        return view('add-booking',['allLocations' => $locationList]);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAvailableTruck(Request $request)
    {
        $booking=new Booking;
        $booking->construction_site_id=$request->CS_id;
        $booking->time=$request->time;
        $booking->truck_type=$request->truck_type;
        $booking->description=$request->description;
        $booking->equipment_id=$request->truck_id;
        $booking->dump_site_id=$request->dump_loc_id;
        $booking->booking_date=$request->date;
        $booking->meter_reading=$request->distance;
        $booking->price=$request->price;
        $booking->company_id= auth()->user()->company_id;
        
        if($booking->save())
            return Response()->json(['success' => 'your booking is successfuly done']);
    }
   
    // Generate PDF
    public function createPDF(Request $request) {
        // retreive all records from db
        //$data = Booking::all();

        // share data to view
        $data=$request;
        
        
        view()->share('booking',$data);
        $pdf = PDF::loadView('invoice', $data);
        $pdf->setPaper("a4", "portrait");
        //$pdf->setPaper(array( 0 , 0 , 226.77 , 226.77 ) );
        
        // download PDF file with download method
        return $pdf->download('invoice.pdf');
        //return Response()->json(['success' => $data->date]);
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function findAvailableTrucks(Request $request)
    {   
        // + Validations
        $validations = Validator::make($request->all(), [
            'location' => 'required',
            'description' => 'required',
            'time' => 'required',
            'date' => 'required',
            'truck_type' => 'required',
            
        ]);
        // Message
        if ($validations->fails())
            return response()->json(['errors' => $validations->errors()->all()]);
            
            $availableTruckInfo=DB::select("SELECT equipment.id as truck_id, stop.id as truck_loc_id FROM `equipment` INNER JOIN stop on equipment.truck_location=stop.stop_org 
            WHERE equipment.truck_type='$request->truck_type' 
            AND equipment.id NOT IN (select bookings.equipment_id 
            FROM bookings WHERE booking_date='$request->date')");
            if(empty($availableTruckInfo)){
                return response()->json(['error' => "No truck available, please change type or date"]);
            }
            $csId=$request->location;
            //random dump yard locations, to replace it later with the ones in the database
            $dy=[123,421,12,45,21];
            
            $result=(new DistanceController)->getMinDistance($csId,$availableTruckInfo,$dy);

            return response()->json(['success' => $result]);
    }

    /**

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
