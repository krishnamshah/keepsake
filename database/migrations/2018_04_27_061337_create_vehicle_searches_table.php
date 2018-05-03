<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleSearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_searches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vehicle_id')->nullable();
            $table->string('from');
            $table->string('to');
            $table->date('start');
            $table->date('end');
            $table->integer('no_of_people');
            $table->boolean('booked')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_searches');
    }
}
