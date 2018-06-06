<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('credit_info', function (Blueprint $table) {
          $table->increments('id');
          $table->string('bank_name');
          $table->string('credit_num');
          $table->string('exp_date');
          $table->string('cbc_num');
          // $table->integer('user_id');
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
      Schema::dropIfExists('credit_info');
    }
}
