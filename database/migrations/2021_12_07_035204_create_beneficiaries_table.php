<?php

use App\Models\Program;
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
            $table->string('first_name');
            $table->string('second_name')->nullable();
            $table->string('last_name');
            $table->string('second_last_name')->nullable();
            $table->date('age');
            $table->unsignedBigInteger('type_id');
            $table->string('identification');
            $table->string('phone');
            $table->unsignedBigInteger('condition_id');
            $table->unsignedBigInteger('gender_id');
            $table->unsignedBigInteger('ethnic_group_id');
            $table->unsignedBigInteger('city_id');
            $table->string('address');
            $table->string('neighborhood');
            $table->unsignedBigInteger('zone_id');
            $table->unsignedBigInteger('stratum_id');
            $table->string('email')->unique();
            $table->string('group');
            $table->unsignedBigInteger('program_id');
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('gender_id')->references('id')->on('genders');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('ethnic_group_id')->references('id')->on('ethnic_groups');
            $table->foreign('zone_id')->references('id')->on('zones');
            $table->foreign('stratum_id')->references('id')->on('stratums');
            $table->foreign('condition_id')->references('id')->on('conditions');
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('program_id')->references('id')->on('programs');
            
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
