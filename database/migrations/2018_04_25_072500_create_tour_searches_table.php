<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourSearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_searches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tour_id')->nullable();
            $table->string('tag');
            $table->date('start');
            $table->date('end');
            $table->integer('no_of_people');
            $table->enum('booking_status',['booked','reserved','cancelled'])->nullable();
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
        Schema::dropIfExists('search_tour');
    }
}
