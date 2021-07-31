<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSundaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sundays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('session');
            $table->string('day');
            $table->string('section');
            $table->string('batch')->nullable();
            $table->string('nineAM_ninefiftyAM');
            $table->string('tenAM_tenfiftyAM');
            $table->string('elevenAM_elevenfiftyAM');
            $table->string('twelvePM_twelvefiftyPM');
            $table->string('twoPM_twofiftyPM');
            $table->string('threePM_threefiftyPM');
            $table->string('fourPM_fourfiftyPM');
            $table->string('break');
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
        Schema::dropIfExists('sundays');
    }
}
