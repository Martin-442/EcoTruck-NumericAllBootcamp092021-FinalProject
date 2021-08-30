<?php

namespace App\Http\Controllers;
use App\Models\Booking;
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
    {   $contractor_id= auth()->user()->id ;
        $bookingList = DB::table('bookings')                 
        ->where('contractor_id', '=', $contractor_id)
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
        return view('add-booking');
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
            'location' => 'required|max:50',
            'description' => 'required',
            'quantity' => 'required',
            'date' => 'required',
            //'type' => 'required',
        ]);

        // Message
        if ($validations->fails())
            return response()->json(['errors' => $validations->errors()->all()]);
    
            $bookedTruck=DB::table('bookings')->select('equipment_id')->where('booking_date', '=', $request->date);

            $availableTruck =  DB::table('trucks')                 
            ->select('*')
            ->whereNotIn('id',$bookedTruck)
            ->where('truck_location', '=', $request->location)
            ->limit(1)
            ->get();
            return response()->json(['success' => $availableTruck]);
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
