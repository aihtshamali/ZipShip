<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sender_id')->unsigned();
            $table->integer('reciever_id')->unsigned();
            $table->string('text');
            $table->boolean('read')->default('0');
            $table->timestamps();
            // Foreign Keys
            $table->foreign('sender_id')->references('id')->on('users');
            $table->dropForeign(['sender_id']);
            $table->foreign('sender_id')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('reciever_id')->references('id')->on('users');
            $table->dropForeign(['reciever_id']);
            $table->foreign('reciever_id')
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
        Schema::dropIfExists('chats');
    }
}
