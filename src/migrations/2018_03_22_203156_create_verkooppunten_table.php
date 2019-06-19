<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerkooppuntenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verkooppunten', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naam')->nullable();
            $table->string('adres');
            $table->string('postcode');
            $table->string('stad');
            $table->string('country');
            $table->string('tel')->nullable();
            $table->json('coord')->nullable();
            $table->string('email')->nullable();
            $table->string('aanbrenger')->nullable();
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
        Schema::dropIfExists('verkooppunten');
    }
}
