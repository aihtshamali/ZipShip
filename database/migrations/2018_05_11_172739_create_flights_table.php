<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->string('source');
            $table->string('destination');
            $table->string('time');
            $table->integer('frm_user_id')->unsigned();
            $table->timestamps();
            // Foreign Keys
            $table->foreign('frm_user_id')->references('id')->on('users');
            $table->dropForeign(['frm_user_id']);
            $table->foreign('frm_user_id')
                ->references('id')->on('users')
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
        Schema::dropIfExists('flights');
    }
}
