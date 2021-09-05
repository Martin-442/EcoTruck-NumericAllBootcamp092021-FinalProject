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


class RegisterContractorController extends Controller
{
    // Constructor Registration
    // https://www.itsolutionstuff.com/post/laravel-multi-step-form-example-tutorialexample.html
    // Constructor Step 1

    public function createProvider1(Request $request)
    {
        return view('register.provider-step1', [
            'providerUser' => session()->get('providerUser'),
            'providerCompany' => session()->get('providerCompany'),
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

        if (empty($request->session()->get('provider'))) {
            $providerUser = new User();
            $providerUser->fill($validatedUser);
            $request->session()->put('providerUser', $providerUser);
        } else {
            $providerUser = $request->session()->get('providerUser');
            $providerUser->fill($validatedUser);
            $request->session()->put('providerUser', $providerUser);
        }
    // dd($request);
        return redirect()->route('register.provider-step2');

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


    // Constructor Step 2

    public function createProvider2(Request $request)
    {
        return view('register.provider-step2', [
            'providerUser' => session()->get('providerUser'),
            'providerCompany' => session()->get('providerCompany'),
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
        if (empty($request->session()->get('providerUser'))) {
            $provider['User'] = new User();
            $provider['User']->fill($validatedUser);
            $request->session()->put('providerUser', $provider['User']);
        } else {
            $provider['User'] = $request->session()->get('providerUser');
            $provider['User']->fill($validatedUser);
            $request->session()->put('providerUser', $provider['User']);
        }

        // Company Table
        if (empty($request->session()->get('providerCompany'))) {
            $provider['Company'] = new Company();
            $provider['Company']->fill($validatedCompany);
            $request->session()->put('providerCompany', $provider['Company']);
        } else {
            $provider['Company'] = $request->session()->get('providerCompany');
            $provider['Company']->fill($validatedCompany);
            $request->session()->put('providerCompany', $provider['Company']);
        }

        return redirect()->route('register.provider-step3');
    }

    // Constructor Step 3
    public function createProvider3(Request $request)
    {
        return view('register.provider-step3', [
            'providerUser' => session()->get('providerUser'),
            'providerCompany' => session()->get('providerCompany'),
        ]);
    }

    public function storeProvider3(Request $request)
    {
        $validatedUser = $request->validate([
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password' => ['', 'confirmed', Rules\Password::defaults()],

        ]);

        // User Table
        if (empty($request->session()->get('providerUser'))) {
            $provider['User'] = new User();
            $provider['User']->fill($validatedUser);
            $request->session()->put('providerUser', $provider['User']);
        } else {
            $provider['User'] = $request->session()->get('providerUser');
            $provider['User']->fill($validatedUser);
            $request->session()->put('providerUser', $provider['User']);
        }

        // Company Table
        if (empty($request->session()->get('providerCompany'))) {
            $provider['Company'] = new Company();
            $provider['Company']->fill($validatedUser);
            $request->session()->put('providerCompany', $provider['Company']);
        } else {
            $provider['Company'] = $request->session()->get('providerCompany');
            $provider['Company']->fill($validatedUser);
            $request->session()->put('providerCompany', $provider['Company']);
        }

    //    dd($provider);
        return redirect()->route('register.provider-final');
    }

    public function createProviderFinal(Request $request) {

        $request->session()->get('providerCompany')->save();

        event(new Registered(session()->get('providerUser')));

        Auth::login(session()->get('providerUser'));

        // $request->session()->get('providerUser')->save();

        $request->session()->forget('providerUser');
        $request->session()->forget('providerCompany');

        // return redirect(RouteServiceProvider::HOME);
        return view('register.provider-final', compact('request'));
        return view('register.provider-final', ['request' => $request]);
    }

}
