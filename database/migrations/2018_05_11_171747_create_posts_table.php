<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('image_1');
            $table->string('image_2');
            $table->string('image_3');
            $table->integer('traveler_reward');
            $table->string('from_loc');
            $table->string('to_loc');
            $table->integer('to_userid')->unsigned();
            $table->string('buying_place');
            $table->timestamps();
            // Foriegn Keys
            $table->foreign('to_userid')->references('id')->on('users');
            $table->dropForeign(['to_userid']);
            $table->foreign('to_userid')
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
        Schema::dropIfExists('posts');
    }
}
