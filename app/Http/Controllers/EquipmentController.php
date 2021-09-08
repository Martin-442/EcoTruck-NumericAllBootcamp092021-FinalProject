<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Session;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // show all equipments
        $equipments = Equipment::all();
        // To display a specific view :
        $company_id= auth()->user()->company_id;
        $equipments = DB::table('equipment')
        ->where('company_id', '=', $company_id)
        ->get();
        $dumpSiteQuery = "SELECT stop.stop as dump_site  FROM `bookings`,stop WHERE bookings.dump_site_id=stop.id AND bookings.company_id='$company_id'";
        $dump_sites=DB::select("SELECT stop.stop as dump_site  FROM `bookings`,stop WHERE bookings.dump_site_id=stop.id AND bookings.company_id='$company_id'");

        $bookingListQuery ="SELECT bookings.*,stop.stop as construction_site  FROM `bookings`,stop WHERE bookings.construction_site_id=stop.id AND bookings.company_id='$company_id'"; // org
        $bookingListQuery = " SELECT e.* FROM equipment e INNER JOIN bookings b ON e.id= b.equipment_id WHERE e.company_id = '6138f7d131d4d' ";
        $bookingListQuery = "SELECT (SELECT s.stop FROM stop s WHERE id= b.construction_site_id) as construction_site, (SELECT s.stop FROM stop s WHERE id= b.dump_site_id) AS dump_site, b.booking_date AS booking_date FROM `bookings` b WHERE b.equipment_id = 3" ;
        $bookingList = DB::select($bookingListQuery);
        // $bookingList = array([
        //     'construction_site' => 'Holler',
        //     'dump_site' => 'Bourglinster - Château',
        //     'booking_date' => '2021-09-30'
        // ],[
        //     'construction_site' => 'Elvange',
        //     'dump_site' => 'Bourglinster - Château',
        //     'booking_date' => '2021-10-29'
        // ],[
        //     'construction_site' => 'Huldange',
        //     'dump_site' => 'Bourglinster - Château',
        //     'booking_date' => '2021-11-08'
        // ]);

//dd($bookingList[0]->dump_site);
        // for ($i=0; $i < count($bookingList); $i++) {
        //     $bookingList[$i]->dump_site=$dump_sites[$i]->dump_site;
        // }

            return view('equipment.equipments', ['equipments' => $equipments], ['bookings' => $bookingList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('equipment.equipment-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validations = Validator::make($request->all(), [

            'truck_type' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required|numeric',
            'mileage' => 'required|numeric',
            'capacity' => 'required|numeric',
            'city' => 'required',
            'postal_code' => 'required|numeric',

        ]);
        // Message
        if ($validations->fails())
            return response()->json(['errors' => $validations->errors()->all()]);

        // to see all the Equipments using INSERT Mehtod

            $equipment = new Equipment;

            $equipment->company_id = auth()->user()->company_id;
            $equipment->truck_type = $request->truck_type;
            $equipment->brand = $request->brand;
            $equipment->model = $request->model;
            $equipment->year = $request->year;
            $equipment->fuel = $request->fuel;
            $equipment->mileage = $request->mileage;
            $equipment->capacity = $request->capacity;
            $equipment->truck_location = $request->truck_location;
            $equipment->city = $request->city;
            $equipment->postal_code = $request->postal_code;
            $equipment->specification = $request->specification;

            $equipment->save();

            return redirect('equipment')->with('success', $request->id. ' was updated successfully');
            return response()->json(['success' => 'Equipment was registered successfully']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipment = Equipment::find($id);
            return view('equipment.equipment-show', ['equipment' => $equipment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipment = Equipment::find($id);

        // Show the form
        return view('equipment.equipment-update', ['equipment' => $equipment]);
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
        $equipment = Equipment::find($id);
        // now update the Equipment

        $equipment->truck_type = $request->truck_type;
        $equipment->brand = $request->brand;
        $equipment->model = $request->model;
        $equipment->year = $request->year;
        $equipment->fuel = $request->fuel;
        $equipment->mileage = $request->mileage;
        $equipment->capacity = $request->capacity;
        $equipment->truck_location = $request->truck_location;
        $equipment->city = $request->city;
        $equipment->postal_code = $request->postal_code;
        $equipment->specification = $request->specification;

        $equipment->save();

        // redirect to Equipments list with a message
        return redirect('equipment')->with('success', $request->id. ' was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Equipment::destroy($id);

        return redirect('equipment')->with('success', 'Requested Equipment Was Deleted Successfully'); //$message['id'] ['$message' => 'Equipment Deleted Successfully', 'id' => $id]

    }
}
