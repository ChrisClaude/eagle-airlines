<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airports', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('city');
            $table->string('country');
            $table->string('iata');
            $table->string('icia');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('altitude');
            $table->string('timezone');
            $table->string('dst');
            $table->string('tz');
            $table->string('station_type');
            $table->string('source');
            $table->timestamps();

            $table->index('name');
            $table->index('city');
            $table->index('country');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airport');
    }
}
