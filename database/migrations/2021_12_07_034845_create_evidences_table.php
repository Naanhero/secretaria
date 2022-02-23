<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvidencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evidences', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->unsignedBigInteger('activity_id');
            $table->boolean('status');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('activity_id')->references('id')->on('activities');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evidences');
    }
}
