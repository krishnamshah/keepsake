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
            $table->increments('id')->unsigend();
            $table->string('tour_id')->nullable();
            $table->string('tag');
            $table->date('start')->default(date("Y-m-d"));
            $table->date('end')->default(date("Y-m-d"));
            $table->integer('no_of_people');
            $table->enum('booking_status',['booked','reserved','cancelled'])->nullable();
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
        Schema::dropIfExists('search_tour');
    }
}
