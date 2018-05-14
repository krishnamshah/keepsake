<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_rooms', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('hotel_id')->unsigned();
            $table->integer('hotel_room_type_id')->unsigned();
            $table->string('name');
            $table->integer('no_of_people')->defaulr(1);
            $table->integer('max_extra_bed_up')->default(0);
            $table->string('room_cost');
            $table->string('cost_per_extra_bed')->nullable();
            $table->integer('no_of_rooms')->unsigned()->defaault(1);
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('updated_user_id')->unsigned()->nullable();
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->foreign('hotel_room_type_id')->references('id')->on('hotel_room_types');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_user_id')->references('id')->on('users');
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
        Schema::dropIfExists('hotel_rooms');
    }
}
