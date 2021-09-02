<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Session;
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
        $bookingList = DB::table('bookings')
        ->where('company_id', '=', $company_id)
        ->get();
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
            'mileage' => 'required|numeric|max:150000',
            'capacity' => 'required|numeric',
            'truck_location' => '',
            'city' => 'required',
            'postal_code' => 'required|numeric',
            'specification' => '',

        ]);
        // Message
        if ($validations->fails())
            return response()->json(['errors' => $validations->errors()->all()]);

        // to see all the Equipments using INSERT Mehtod

          $equipment = new Equipment;

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
        return redirect('equipment')->with('success', $request->id. 'was updated successfully');
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
