<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('users', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('avatar');
        $table->string('lastName');
        $table->string('birthday');
        $table->string('userName');
        $table->string('genre');
        $table->string('email');
        $table->string('name');
        $table->string('password');
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

          Schema::table('users', function (Blueprint $table) {

            $table->dropIfExists('avatar');
            $table->dropIfExists('lastName');
            $table->dropIfExists('birthday');
            $table->dropIfExists('userName');
            $table->dropIfExists('genre');
            $table->dropIfExists('email');
            $table->dropIfExists('name');
            $table->dropIfExists('password');
          });
    }
}
