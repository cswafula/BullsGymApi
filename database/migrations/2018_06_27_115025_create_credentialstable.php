<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCredentialstable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('credentials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Email');
            $table->string('Password');
            $table->string('Gender');
            $table->string('Weight');
            $table->string('BMI');
            $table->string('GymName');
            $table->string('Latitude');
            $table->string('Longitude');
            $table->string('ImageURL');
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
         Schema::dropIfExists('Credentials');
    }
}
