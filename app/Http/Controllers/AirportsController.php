<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AirportsController extends Controller
{
    public function index() {
        $airports = DB::table('airports')->simplePaginate(17);

        return view('airport.index', compact('airports'));
    }
}
