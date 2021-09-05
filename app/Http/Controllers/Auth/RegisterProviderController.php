<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class RegisterProviderController extends Controller
{
    private function getRole() {
        return 'provider';
    }

    // Provider Registration
    // https://www.itsolutionstuff.com/post/laravel-multi-step-form-example-tutorialexample.html
    // Provider Step 1

    public function createProvider1(Request $request)
    {

        return view('register.'.$this->getRole().'-step1', [
            $this->getRole().'User' => session()->get($this->getRole().'User'),
            $this->getRole().'Company' => session()->get($this->getRole().'Company'),
        ]);
    }

    public function storeProvider1(Request $request)
    {
        $validatedUser = $request->validate([
            // 'first_name' => 'required|string|max:255',
            // 'last_name' => 'required|string|max:255',
            // 'email' => 'required|string|email|max:255|unique:users',
            'email' => 'string|email|max:255|unique:users',
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
        ]);

        if (empty($request->session()->get($this->getRole()))) {
            $providerUser = new User();
            $providerUser->fill($validatedUser);
            $request->session()->put($this->getRole().'User', $providerUser);
        } else {
            $providerUser = $request->session()->get($this->getRole().'User');
            $providerUser->fill($validatedUser);
            $request->session()->put($this->getRole().'User', $providerUser);
        }
    // dd($request);
        return redirect()->route('register.'.$this->getRole().'-step2');

        // $user = User::create([
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'city' => $request->city,
        //     'postal_code' => $request->postal_code,
        //     'role' => 'Provider',
        //     'email' => $request->email,
        //     'email_verified_at' => $request->email_verified_at,
        //     'password' => Hash::make($request->password),
        // ]);

        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
    }


    // Provider Step 2

    public function createProvider2(Request $request)
    {
        return view('register.'.$this->getRole().'-step2', [
            $this->getRole().'User' => session()->get($this->getRole().'User'),
            $this->getRole().'Company' => session()->get($this->getRole().'Company'),
        ]);
    }

    public function storeProvider2(Request $request)
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
            $provider['User'] = new User();
            $provider['User']->fill($validatedUser);
            $request->session()->put($this->getRole().'User', $provider['User']);
        } else {
            $provider['User'] = $request->session()->get($this->getRole().'User');
            $provider['User']->fill($validatedUser);
            $request->session()->put($this->getRole().'User', $provider['User']);
        }

        // Company Table
        if (empty($request->session()->get($this->getRole().'Company'))) {
            $provider['Company'] = new Company();
            $provider['Company']->fill($validatedCompany);
            $request->session()->put($this->getRole().'Company', $provider['Company']);
        } else {
            $provider['Company'] = $request->session()->get($this->getRole().'Company');
            $provider['Company']->fill($validatedCompany);
            $request->session()->put($this->getRole().'Company', $provider['Company']);
        }

        return redirect()->route('register.'.$this->getRole().'-step3');
    }

    // Provider Step 3
    public function createProvider3(Request $request)
    {
        return view('register.'.$this->getRole().'-step3', [
            $this->getRole().'User' => session()->get($this->getRole().'User'),
            $this->getRole().'Company' => session()->get($this->getRole().'Company'),
        ]);
    }

    public function storeProvider3(Request $request)
    {
        $validatedUser = $request->validate([
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password' => ['', 'confirmed', Rules\Password::defaults()],

        ]);

        // User Table
        if (empty($request->session()->get($this->getRole().'User'))) {
            $provider['User'] = new User();
            $provider['User']->fill($validatedUser);
            $request->session()->put($this->getRole().'User', $provider['User']);
        } else {
            $provider['User'] = $request->session()->get($this->getRole().'User');
            $provider['User']->fill($validatedUser);
            $request->session()->put($this->getRole().'User', $provider['User']);
        }

        // Company Table
        if (empty($request->session()->get($this->getRole().'Company'))) {
            $provider['Company'] = new Company();
            $provider['Company']->fill($validatedUser);
            $request->session()->put($this->getRole().'Company', $provider['Company']);
        } else {
            $provider['Company'] = $request->session()->get($this->getRole().'Company');
            $provider['Company']->fill($validatedUser);
            $request->session()->put($this->getRole().'Company', $provider['Company']);
        }

    //    dd($provider);
        return redirect()->route('register.'.$this->getRole().'-final');
    }

    public function createProviderFinal(Request $request) {

        $companyID = uniqid();
        if (!empty(session()->get($this->getRole().'Company'))) {
            $providerCompany = session()->get($this->getRole().'Company');
            $request->session()->forget($this->getRole().'Company');
            $providerCompany->email = 'test@example.com';
            $providerCompany->id = $companyID;
            //dd($providerCompany);
            $providerCompany->save();
        }

        $request->session()->get($this->getRole().'User')->company_id = $companyID;
        $request->session()->get($this->getRole().'User')->role = 'Provider';
        $request->session()->get($this->getRole().'User')->password = Hash::make($request->session()->get($this->getRole().'User')->password);
        $request->session()->get($this->getRole().'User')->save();

        event(new Registered(session()->get($this->getRole().'User')));

        Auth::login(session()->get($this->getRole().'User'));


        $request->session()->forget($this->getRole().'User');

        return redirect(RouteServiceProvider::HOME);
        return view('register.'.$this->getRole().'-final', compact('request'));
        return view('register.'.$this->getRole().'-final', ['request' => $request]);
    }

}
