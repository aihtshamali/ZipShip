<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address');
            $table->string('email')->unique();
            $table->boolean('verified');
            $table->string('phone');
            $table->integer('credit_id')->unsigned();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            // Forign Keys
            $table->foreign('credit_id')->references('id')->on('credit_info');
            $table->dropForeign(['credit_id']);
            $table->foreign('credit_id')
                ->references('id')->on('credit_info')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
