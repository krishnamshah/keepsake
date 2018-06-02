<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tour_package', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('itinerary');
            $table->text('tag')->nullable();
            $table->string('duration');
            $table->float('price',8,2)->default(0000.00)->nullable();
            $table->string('group_rate');
            $table->string('best_time');
            $table->string('group_size')->default('any');
            $table->text('cost_includes_excludes')->nullable();
            $table->string('image')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        //
        Schema::dropIfExists('tour_package');
    }
}
