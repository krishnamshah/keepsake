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
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->text('itinerary');
            $table->string('tag');
            $table->string('duration');
            $table->string('price');
            $table->string('group_rate');
            $table->string('best_time');
            $table->string('group_size')->default('any');
            $table->text('cost_includes_excludes')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_home')->default(0);
            $table->integer('user_id')->unsigned()->nullable();
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
        //
        Schema::dropIfExists('tour_package');
    }
}
