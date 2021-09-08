<?php

namespace App\Http\Controllers;
use App\Models\Booking;

use App\Models\Stop;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class BookingController extends Controller
{
    public function downloadPdf($data){


        $filePath = public_path("pdf/".$data);

    	$headers = ['Content-Type: application/pdf'];

    	$fileName = $data;

    	return response()->download($filePath, $fileName, $headers);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $locationList=Stop::all();

        $company_id= auth()->user()->company_id ;
        //retrieve dump_site and construction site name
        $dump_sites=DB::select("SELECT stop.stop as dump_site  FROM `bookings`,stop WHERE bookings.dump_site_id=stop.id AND bookings.company_id='$company_id'");
        $bookingList=DB::select("SELECT bookings.*,stop.stop as construction_site  FROM `bookings`,stop WHERE bookings.construction_site_id=stop.id AND bookings.company_id='$company_id'");

        //dd($bookingList);
        for ($i=0; $i < count($bookingList); $i++) {
            $bookingList[$i]->dump_site=$dump_sites[$i]->dump_site;
        }

        return view('dashboard-contractor', ['bookings' => $bookingList],['allLocations' => $locationList]);
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
        //dd($booking);
        $booking->truck_type=$request->truck_type;
        $booking->description=$request->description;
        $booking->equipment_id=$request->truck_id;
        $booking->dump_site_id=$request->dump_loc_id;
        $newDate = date("Y-m-d", strtotime($request->date));
        $booking->booking_date=$newDate;
        $booking->meter_reading=$request->distance;
        $booking->price=$request->price;
        $booking->company_id= auth()->user()->company_id;

        if($booking->save())
        //return redirect('dashboardd-contractor',['success' => 'your booking is successfuly done']);
        return Response()->json(['success' => 'your booking is successfuly done']);
    }

    // Generate PDF
    public function createPDF(Request $request) {
        //store Data in booking DB
        $booking=new Booking;
        $booking->construction_site_id=$request->CS_id;
        $booking->time=$request->time;
        $booking->truck_type=$request->truck_type;
        $booking->description=$request->description;
        $booking->equipment_id=$request->truck_id;
        $booking->dump_site_id=$request->dump_loc_id;
        $newDate = date("Y-m-d", strtotime($request->date));
        $booking->booking_date=$newDate;
        $booking->meter_reading=$request->distance;
        $booking->price=$request->price;
        $booking->company_id= auth()->user()->company_id;
        $booking->save();


        $data=$request;



        view()->share('booking',$data);
        $pdf = PDF::loadView('invoice', $data);

        $pdf->setPaper("a4", "portrait");

        $path = public_path('pdf/');
        $fileName =  time().'.'. 'pdf' ;

        $pdf->save($path . '/' . $fileName);

        return $fileName;

        //return $pdf->download('invoice.pdf');
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

        if ($validations->fails())
            return response()->json(['errors' => $validations->errors()->all()]);

            $availableTruckInfo=DB::select("SELECT equipment.id as truck_id, stop.id as truck_loc_id FROM `equipment` INNER JOIN stop on equipment.truck_location=stop.stop_org
            WHERE equipment.truck_type='$request->truck_type'
            AND equipment.id NOT IN (select bookings.equipment_id
            FROM bookings WHERE booking_date='$request->date')");
            if(empty($availableTruckInfo)){
                return response()->json(['errors' => "No truck available, please change type or date"]);
            }
            $csId=$request->location;
            //random dump yard locations, to replace it later with the ones in the database
            $dy=[123,421,12,45,21];

            $result=(new DistanceController)->getMinDistance($csId,$availableTruckInfo,$dy);

            return response()->json(['success' => $result]);
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
