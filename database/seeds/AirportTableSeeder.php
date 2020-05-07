<?php

use App\Airport;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('airport')->delete();
        $json = File::get("database/data/airport.json");
        $airports = json_decode($json);
        foreach ($airports as $airport) {
            Airport::create(array(
                'name' => $airport->name,
                'city' => $airport->city,
                'country' => $airport->country,
                'iata' => $airport->IATA,
                'icia' => $airport->ICIAO,
                'latitude' => $airport->latitude,
                'longitude' => $airport->longitude,
                'altitude' => $airport->altitude,
                'timezone' => $airport->timezone,
                'dst' => $airport->dst,
                'tz' => $airport->tz,
                'station_type' => $airport->station_type,
                'source' => $airport->source
            ));
        }
    }
}
