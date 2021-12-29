<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssistanceBeneficiaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistance_beneficiary', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('assistance_id');
            $table->unsignedBigInteger('beneficiary_id');

            $table->foreign('assistance_id')->references('id')->on('assistances');
            $table->foreign('beneficiary_id')->references('id')->on('beneficiaries');
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
        Schema::dropIfExists('assistance_beneficiary');
    }
}
