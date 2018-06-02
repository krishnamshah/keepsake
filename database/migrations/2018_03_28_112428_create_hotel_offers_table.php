<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_offers', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('offername');
            $table->text('description')->nullable();
            $table->date('offer_start_date')->default(date('Y-m-d'))->nullable();
            $table->date('offer_end_date')->default(date('Y-m-d'))->nullable();
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
        Schema::dropIfExists('hotel_offers');
    }
}
