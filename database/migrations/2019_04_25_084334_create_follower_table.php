<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('followers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('twitter_id');
            $table->unsignedBigInteger('users_twitter_id')->references('twitter_id')->on('users');
            $table->string('name');
            $table->string('screen_name');
            $table->string('description');
            $table->string('profile_image_url');
            $table->integer('followers_count');
            $table->integer('friends_count');
            $table->integer('statuses_count');
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
        Schema::dropIfExists('followers');
    }
}
