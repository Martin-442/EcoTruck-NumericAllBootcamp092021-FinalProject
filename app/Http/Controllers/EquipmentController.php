<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;
use Illuminate\Support\Facades\Validator;

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
            return view('equipments', ['equipments' => $equipments]);
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
            //'name' => 'required|max:30',
            'mileage' => 'required|numeric|max:150000',
            'capacity' => 'required|numeric'
        ]);
        // Message
        if ($validations->fails())
            return response()->json(['errors' => $validations->errors()->all()]);

        // to see all the flowers using INSERT Mehtod

          $equipment = new Equipment;

            //$equipment->name = $request->name;
            $equipment->mileage = $request->mileage;
            $equipment->capacity = $request->capacity;
            $equipment->save();

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
            return view('equipments', ['equipments' => $equipment]);
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
        return view('equipment-update', ['equipment' => $equipment]);
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
        // now update the flower

        $equipment->name = $request->name;
        $equipment->mileage = $request->mileage;

        $equipment->save();

        // redirect to flowers list with a message
        return redirect('equipments')->with('success', $request->name . ' was updated successfully');
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

        return redirect('equipments')->with('success', 'Equipment deleted');
    }
}
