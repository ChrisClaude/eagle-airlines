<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->uuid('id');
            $table->enum('kind', ['round-trip', 'one-way', 'multi-city']);
            $table->string('status');
            $table->foreignId('flight_id')->constrained();
            $table->foreignId('passenger_id')->constrained();
            $table->double('total_amount');

            $table->timestamps();

            $table->index('flight_code');
            $table->index('passenger_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
