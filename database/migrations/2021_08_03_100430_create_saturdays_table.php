<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaturdaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saturdays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('session')->nullable();
            $table->string('day')->nullable();
            $table->string('section')->nullable();
            $table->string('batch')->nullable();
            $table->string('nineAM_ninefiftyAM')->nullable();
            $table->string('tenAM_tenfiftyAM')->nullable();
            $table->string('elevenAM_elevenfiftyAM')->nullable();
            $table->string('twelvePM_twelvefiftyPM')->nullable();
            $table->string('twoPM_twofiftyPM')->nullable();
            $table->string('threePM_threefiftyPM')->nullable();
            $table->string('fourPM_fourfiftyPM')->nullable();
            $table->string('break')->nullable();
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
        Schema::dropIfExists('saturdays');
    }
}
