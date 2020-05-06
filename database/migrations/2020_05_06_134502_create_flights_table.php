<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id('flight_code');
            $table->dateTimeTz("date");
            $table->double('miles');
            $table->foreignId('departure');
            $table->foreignId('destination');
            $table->timestamps();

            $table->index('airport_id_dep');
            $table->index('airport_id_des');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
