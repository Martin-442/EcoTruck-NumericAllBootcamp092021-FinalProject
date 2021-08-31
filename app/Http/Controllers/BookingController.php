<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Distance;
use App\Models\Equipment;
use App\Models\Stop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\Environment\Console;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $company_id= auth()->user()->company_id ;
        $bookingList = DB::table('bookings')                 
        ->where('company_id', '=', $company_id)
        ->get();

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
    public function store(Request $request)
    {
        //
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
            'quantity' => 'required',
            'date' => 'required',
            
        ]);

        // Message
        if ($validations->fails())
            return response()->json(['errors' => $validations->errors()->all()]);

            // available trucks on the day selected 
            $bookedTruck=DB::table('bookings')->select('equipment_id')->where('booking_date', '=', $request->date);
            $availableTruck = Equipment::select('id')
            ->whereNotIn('id',$bookedTruck)
            ->where('capacity','>',$request->quantity)
            ->get();
            //construction location id
            $csResult= STOP::select('id')->where('stop','=',$request->location)->get();
            $csId=$csResult[0]['id'];
            //random dump yard locations, to replace it later with the ones in the database
            $dy=[123,421,12,45,21];
            //array of truck id's available
            $tl=array();
            foreach($availableTruck as $truckId){
               $tl[]=$truckId['id'];
            }

            $result=(new DistanceController)->getRoundTripArray($csId,$tl,$dy);

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
