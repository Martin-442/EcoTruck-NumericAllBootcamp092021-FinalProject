<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcogreenController extends Controller
{

    public function showEcogreen() {
        return view('ecogreen.index_small');
        return view('ecogreen.index');
    }

}
