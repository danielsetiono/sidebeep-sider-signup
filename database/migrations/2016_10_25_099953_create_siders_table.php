<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->date('dob');
            $table->string('gender');
            $table->string('email')->unique();
            $table->integer('cityID')->unsigned();
            $table->foreign('cityID')->references('id')->on('city');
            $table->string('phone');
            $table->string('nik');
            $table->string('npwp');
            $table->string('skill');
            $table->string('tag');
            $table->string('role');
            $table->string('userImg');
            $table->string('ktpImg');
            $table->string('university');
            $table->integer('referenceID')->unsigned();
            $table->foreign('referenceID')->references('id')->on('refs');
            $table->integer('marketerID')->unsigned()->nullable();
            $table->foreign('marketerID')->references('id')->on('marketers');
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
        Schema::drop('siders');
    }
}
