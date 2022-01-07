<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_program', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('program_id');

            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('program_id')->references('id')->on('programs');

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
        Schema::dropIfExists('city_program');
    }
}
