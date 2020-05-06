<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $fillable = [
        'airport_id', 'name', 'city',
        'country', 'IATA', 'ICIAO',
        'latitude', 'longitude', 'altitude',
        'timezone', 'dst', 'tz',
        'station_type', 'source'
    ];
}
