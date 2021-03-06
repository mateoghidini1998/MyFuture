<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowersTable extends Migration
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
        $table->unsignedBigInteger('follower_id');
        $table->foreign('follower_id')->references('id')->on('users')->onDelete('cascade');
        $table->unsignedBigInteger('leader_id');
        $table->foreign('leader_id')->references('id')->on('users')->onDelete('cascade');
        $table->timestamps();
        $table->softDeletes();
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
