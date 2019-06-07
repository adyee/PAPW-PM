<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table){
            $table->increments('id_users');
            $table->string('email');
            $table->string('password');
            $table->string('name');
            $table->string('career')->default("Artes");
            $table->string('banner')->default('assets/default.jpg');
            $table->string('profile_photo')->default('assets/prof_pic.jpg');
            $table->boolean('admin')->default('0');
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
        Schema::drop('users');
    }
}

