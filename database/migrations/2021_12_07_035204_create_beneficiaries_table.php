<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('second_last_name');
            $table->string('phone');
            $table->string('address');
            $table->integer('age');
            $table->unsignedBigInteger('gender_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('ethnic_group_id');
            $table->string('email')->unique();
            $table->boolean('active')->default(true);
            $table->timestamps();

            $table->foreign('gender_id')->references('id')->on('genders');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('ethnic_group_id')->references('id')->on('ethnic_groups');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficiaries');
    }
}
