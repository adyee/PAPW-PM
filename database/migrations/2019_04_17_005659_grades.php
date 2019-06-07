<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Grades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('grades', function(Blueprint $table){
            $table->increments('id_grades');
            $table->boolean('grade1');
            $table->boolean('grade2');
            $table->boolean('grade3');
            $table->boolean('grade4');
            $table->boolean('grade5');
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
        Schema::drop('grades');
    }
}
