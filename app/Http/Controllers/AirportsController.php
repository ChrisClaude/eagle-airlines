<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AirportsController extends Controller
{
    public function index() {
        $airports = DB::table('airports')->paginate(17);

        return view('airport.index', compact('airports'));
    }

    public function search(Request $request) {
        $airport = $request->query('airport');
        $airports = DB::table('airports')
            ->where('name', 'like', '%'.$airport.'%')
            ->orWhere('city', 'like', '%'.$airport.'%')
            ->orWhere('country', 'like', '%'.$airport.'%')
            ->paginate(17);


        return view('airport.index', compact('airports'));
    }
}
