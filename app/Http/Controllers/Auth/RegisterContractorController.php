<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Stop;
use App\Models\User;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class RegisterContractorController extends Controller
{
    private function getRole() {
        return 'contractor';
    }

    // Constructor Registration
    // https://www.itsolutionstuff.com/post/laravel-multi-step-form-example-tutorialexample.html
    // Constructor Step 1

    public function createContractor1(Request $request)
    {
        return view('register.'.$this->getRole().'-step1', [
            'sU' => session()->get($this->getRole().'User'),
            'sC' => session()->get($this->getRole().'Company'),
        ]);
    }

    public function storeContractor1(Request $request)
    {
        $validatedUser = $request->validate([
            // 'first_name' => 'required|string|max:255',
            // 'last_name' => 'required|string|max:255',
            // 'email' => 'required|string|email|max:255|unique:users',
            'email' => 'string|email|max:255|unique:users',
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
        ]);

        // User Table

        if (empty($request->session()->get($this->getRole()))) {
            $contractorUser = new User();
            $contractorUser->fill($validatedUser);
            $request->session()->put($this->getRole().'User', $contractorUser);
        } else {
            $contractorUser = $request->session()->get($this->getRole().'User');
            $contractorUser->fill($validatedUser);
            $request->session()->put($this->getRole().'User', $contractorUser);
        }


        // Company Table
        if (empty($request->session()->get($this->getRole().'Company'))) {
            $contractor['Company'] = new Company();
            $request->session()->put($this->getRole().'Company', $contractor['Company']);
        } else {
            $contractor['Company'] = $request->session()->get($this->getRole().'Company');
            $request->session()->put($this->getRole().'Company', $contractor['Company']);
        }

    // dd($request);
        return redirect()->route('register.'.$this->getRole().'-step2');

        // $user = User::create([
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'city' => $request->city,
        //     'postal_code' => $request->postal_code,
        //     'role' => 'Contractor',
        //     'email' => $request->email,
        //     'email_verified_at' => $request->email_verified_at,
        //     'password' => Hash::make($request->password),
        // ]);

        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceContractor::HOME);
    }


    // Constructor Step 2

    public function createContractor2(Request $request)
    {

        $stop_select = Stop::select('stop', 'id')->get();
        return view('register.'.$this->getRole().'-step2', [
            'sU' => session()->get($this->getRole().'User'),
            'sC' => session()->get($this->getRole().'Company'),
            'stops' => $stop_select,
        ]);
    }

    public function storeContractor2(Request $request)
    {
        $validatedUser = $request->validate([
        ]);
        $validatedCompany = $request->validate([
            // 'company_name' => 'required|string|max:255',
            // 'address' => 'required|string|max:255',
            // 'city' => 'required|string|max:255',
            // 'zip_code' => 'required|string|max:255',
            // 'phone' => 'required|string|max:255',

            'company_name' => 'string|max:255',
            'address' => 'string|max:255',
            'city' => 'string|max:255',
            'zip_code' => 'string|max:255',
            'zip_code' => 'string|max:255',
            'phone' => 'string|max:255',
        ]);


        // User Table
        if (empty($request->session()->get($this->getRole().'User'))) {
            $contractor['User'] = new User();
            $contractor['User']->fill($validatedUser);
            $request->session()->put($this->getRole().'User', $contractor['User']);
        } else {
            $contractor['User'] = $request->session()->get($this->getRole().'User');
            $contractor['User']->fill($validatedUser);
            $request->session()->put($this->getRole().'User', $contractor['User']);
        }

        // Company Table
        if (empty($request->session()->get($this->getRole().'Company'))) {
            $contractor['Company'] = new Company();
            $contractor['Company']->fill($validatedCompany);
            $request->session()->put($this->getRole().'Company', $contractor['Company']);
        } else {
            $contractor['Company'] = $request->session()->get($this->getRole().'Company');
            $contractor['Company']->fill($validatedCompany);
            $request->session()->put($this->getRole().'Company', $contractor['Company']);
        }

        return redirect()->route('register.'.$this->getRole().'-step3');
    }

    // Constructor Step 3
    public function createContractor3(Request $request)
    {
        return view('register.'.$this->getRole().'-step3', [
            'sU' => session()->get($this->getRole().'User'),
            'sC' => session()->get($this->getRole().'Company'),
        ]);
    }

    public function storeContractor3(Request $request)
    {
        // User data validation step
    }

    // Constructor Step 4
    public function createContractor4(Request $request)
    {
        return view('register.'.$this->getRole().'-step4', [
            'sU' => session()->get($this->getRole().'User'),
            'sC' => session()->get($this->getRole().'Company'),
        ]);
    }

    public function storeContractor4(Request $request)
    {
        $validatedUser = $request->validate([
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password' => ['', 'confirmed', Rules\Password::defaults()],

        ]);

        // User Table
        if (empty($request->session()->get($this->getRole().'User'))) {
            $contractor['User'] = new User();
            $contractor['User']->fill($validatedUser);
            $request->session()->put($this->getRole().'User', $contractor['User']);
        } else {
            $contractor['User'] = $request->session()->get($this->getRole().'User');
            $contractor['User']->fill($validatedUser);
            $request->session()->put($this->getRole().'User', $contractor['User']);
        }

        // Company Table
        if (empty($request->session()->get($this->getRole().'Company'))) {
            $contractor['Company'] = new Company();
            $contractor['Company']->fill($validatedUser);
            $request->session()->put($this->getRole().'Company', $contractor['Company']);
        } else {
            $contractor['Company'] = $request->session()->get($this->getRole().'Company');
            $contractor['Company']->fill($validatedUser);
            $request->session()->put($this->getRole().'Company', $contractor['Company']);
        }

    //    dd($contractor);
        return redirect()->route('register.'.$this->getRole().'-final');
    }

    public function createContractorFinal(Request $request) {

        $companyID = uniqid();
        if (!empty(session()->get($this->getRole().'Company'))) {
            $contractorCompany = session()->get($this->getRole().'Company');
            // forget session
            $request->session()->forget($this->getRole().'Company');
            $contractorCompany->email = 'test@example.com';
            $contractorCompany->id = $companyID;
            //dd($contractorCompany);
            $contractorCompany->save();
        }

        $request->session()->get($this->getRole().'User')->company_id = $companyID;
        $request->session()->get($this->getRole().'User')->role = 'Contractor';
        $request->session()->get($this->getRole().'User')->password = Hash::make($request->session()->get($this->getRole().'User')->password);
        $request->session()->get($this->getRole().'User')->save();

        event(new Registered(session()->get($this->getRole().'User')));

        Auth::login(session()->get($this->getRole().'User'));

        // forget session
        $request->session()->forget($this->getRole().'User');

        return redirect(RouteServiceProvider::HOME);
        // return view('register.'.$this->getRole().'-final', compact('request'));
        // return view('register.'.$this->getRole().'-final', ['request' => $request]);
    }

}
