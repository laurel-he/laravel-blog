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
            $table->string('name');
            $table->string('nickname');
            $table->string('birthday');
            $table->string('phone_num');
            $table->string('wechat_num');
            $table->string('qq_num');
            $table->string('avatar');
            $table->string('mark');
            $table->enum('gender',['0','1']);
            $table->tinyInteger('age');
            $table->double('score');
            $table->int('grade');
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
        Schema::dropIfExists('users');
    }
}
