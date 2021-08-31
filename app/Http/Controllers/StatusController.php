<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    // https://httpstatuses.com

    // https://httpstatuses.com/401
    public function status401(Request $request) {
        return view('/status/401');
    }
}
