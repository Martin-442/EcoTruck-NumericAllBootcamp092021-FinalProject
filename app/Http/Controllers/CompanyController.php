<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $userDetails=DB::table('users')
        ->where('id', '=',auth()->user()->id)
        ->get();


        $company_id= auth()->user()->company_id ;
        $companyDetails = DB::table('company')
        ->where('id', '=', $company_id)
        ->get();



        // To display a specific view :
        return view('profile.display-profile', ['companyDetails' => $companyDetails[0]],['userDetails'=>$userDetails[0]]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userDetails=DB::table('users')
        ->where('id', '=',auth()->user()->id)
        ->get();


        $company_id= auth()->user()->company_id ;
        $companyDetails = DB::table('company')
        ->where('id', '=', $company_id)
        ->get();
        return view('profile.update', ['companyDetails' => $companyDetails[0]],['userDetails'=>$userDetails[0]]);
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

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // + Validations
        $validations = Validator::make($request->all(), [
            'firstName' => 'required|max:50',
            'lastName' => 'required|max:50',
//            'city'=>'required',
            'email'=>'required',
            'companyName'=>'required',
            'address'=>'required',
            'zip_code'=>'numeric',
            'companyEmail'=>'required',

        ]);



        $companyId=auth()->user()->company_id;
        $userId=auth()->user()->id;


        $user=User::Find($userId);
        $company=Company::Find($companyId);
        //update user info
        $user->first_name = $request->firstName;
        $user->last_name = $request->lastName;
        $user->city = auth()->user()->city;
        $user->email = $request->email;
        //update company info
        $company->company_name = $request->companyName;
        $company->address = $request->address;
        $company->zip_code = $request->zip_code;
        $company->email = $request->companyEmail;

        $company->save();
        $user->save();


        // Message
        if ($validations->fails())
            return response()->json(['errors' => $validations->errors()->all()]);

        //return response()->json(['success' => 'Profile successfully updated ']);
        return redirect('profile')->with('success', $request->name . ' was updated successfully');
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
