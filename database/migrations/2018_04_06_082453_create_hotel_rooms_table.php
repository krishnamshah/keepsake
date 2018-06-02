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
            $table->integer('no_of_adult')->default(1);
            $table->integer('no_of_child')->default(1);
            $table->integer('max_extra_bed_up')->default(0);
            $table->float('room_cost',8,2)->default(00.00)->nullable();
            $table->float('cost_per_extra_bed',8,2)->default(00.00)->nullable();

            $table->float('rate_ep_plan',8,2)->default(00.00)->nullable();
            $table->float('rate_ap_plan',8,2)->default(00.00)->nullable();
            $table->float('rate_map_plan',8,2)->default(00.00)->nullable();
            $table->float('rate_cp_plan',8,2)->default(00.00)->nullable();

            $table->string('image')->nullable();

            $table->integer('no_of_rooms')->unsigned()->default(1);
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('updated_user_id')->unsigned()->nullable();
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->foreign('hotel_room_type_id')->references('id')->on('hotel_room_types');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_user_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
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
