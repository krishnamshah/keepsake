<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_booking', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vehicle_id')->unsigned();
            $table->enum('booking_status',['booked','cancelled','confirmed']);
            $table->enum('type', ['car', 'bus', 'zip', 'suv']);
            $table->integer('no_of_People');
            $table->string('location');
            $table->string('drop_location')->nullable();
            $table->string('rate_perday')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('booked_by');
            $table->integer('phone_no');
            $table->string('email');
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
        Schema::dropIfExists('vehicle_booking');
    }
}
