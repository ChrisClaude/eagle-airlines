<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function create() {
        return view('bookings.create');
    }

    public function store() {
        // validate the data


        // store the data


        // redirect to a relevant url
        return redirect('/bookings/create');
    }
}
