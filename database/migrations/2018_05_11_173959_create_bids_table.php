<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->unsigned();
            $table->integer('frm_user_id')->unsigned();
            $table->integer('amount');
            $table->integer('flight_id')->unsigned();
            $table->timestamps();
            //

            $table->foreign('flight_id')->references('id')->on('flights');
            $table->dropForeign(['flight_id']);
            $table->foreign('flight_id')
                ->references('id')->on('flights')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('frm_user_id')->references('id')->on('users');
            $table->dropForeign(['frm_user_id']);
            $table->foreign('frm_user_id')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('post_id')->references('id')->on('posts');
            $table->dropForeign(['post_id']);
            $table->foreign('post_id')
                ->references('id')->on('posts')
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
        Schema::dropIfExists('bids');
    }
}
