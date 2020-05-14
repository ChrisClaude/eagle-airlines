<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passengers', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->string("passenger_email");
            $table->string("surname");
            $table->string("name");
            $table->enum("age", ["adult", "under_12"]);
            $table->string("title");
            $table->string("passport_number");
            $table->string("citizenship");
            $table->timestamps();

            $table->index("user_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passengers');
    }
}
