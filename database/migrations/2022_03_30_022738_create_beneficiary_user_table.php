<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiaryUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiary_user', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('beneficiary_id')->references('id')->on('beneficiaries');
            $table->foreignId('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('beneficiary_user');
    }
}
