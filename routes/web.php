<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Booking Routes
Route::get('/bookings/create', 'BookingsController@create')->name('create_booking_page');
Route::post('/bookings', 'BookingsController@store')->name('create_booking');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
 * ***************
 * Admin Routes  *
 * **************
 * */

// Airports Routes
Route::get('/airports', 'AirportsController@index');
Route::get('/airports/search', 'AirportsController@search')->name('search_airports');
