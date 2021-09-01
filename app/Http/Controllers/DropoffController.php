<?php

namespace App\Http\Controllers;

use App\Models\Dropoff;
use App\Models\Stop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DropoffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dropoffall = Dropoff::all();

        // To display a specific view :
        return view('dropoff.all', ['dropoffall' => $dropoffall]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = new Stop();

        return view('dropoff.new', ['locationsFormArray' => $locations->FormArray]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate automatically return back() to previous page if errors
        $validations = Validator::make($request->all(), [
            'name' => 'required|max:30',
            'location_id' => 'required|numeric'
        ]);

        // Message
        if ($validations->fails()) {
            return response()->json(['errors' => $validations->errors()->all()]);
        }

        $dropoff = Dropoff::create([
            'name' => $request->name,
            'location_id' => $request->location_id,
            'description' => $request->description
        ]);

        // $dropoffall = Dropoff::all();
        // return view('dropoff.all', ['dropoffall' => $dropoffall]);
        return response()->json(['success' => 'Record is added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dropoff = Dropoff::find($id);

        // Show the form
        return view('dropoff.detail', ['dropoff' => $dropoff]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dropoff = Dropoff::find($id);
        $locations = new Stop();

        // Show the form
        return view('dropoff.update', ['dropoff' => $dropoff, 'locationsFormArray' => $locations->FormArray]);
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
        $dropoff = Dropoff::find($id);

        $dropoff->name = $request->name;
        $dropoff->location_id = $request->location_id;
        $dropoff->description = $request->description;
        $dropoff->save();

        // redirect to dropoff list with a message
        return redirect('dropoff')->with('success', $request->name . ' was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dropoff::destroy($id);

        // redirect to dropoff list with a message
        return redirect('dropoff.all')->with('success', 'Dropoff location deleted');
    }
}
