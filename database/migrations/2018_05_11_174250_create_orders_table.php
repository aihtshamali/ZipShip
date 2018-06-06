<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('frm_user_id')->unsigned();
            $table->integer('to_user_id')->unsigned();
            $table->integer('bid_id')->unsigned();
            $table->string('status')->default('pending');
            $table->timestamps();
            //

            $table->foreign('bid_id')->references('id')->on('bids');
            $table->dropForeign(['bid_id']);
            $table->foreign('bid_id')
                ->references('id')->on('bids')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('frm_user_id')->references('id')->on('users');
            $table->dropForeign(['frm_user_id']);
            $table->foreign('frm_user_id')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('to_user_id')->references('id')->on('users');
            $table->dropForeign(['to_user_id']);
            $table->foreign('to_user_id')
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
        Schema::dropIfExists('orders');
    }
}
