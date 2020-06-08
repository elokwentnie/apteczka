<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Apteczkas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apteczkas', function (Blueprint $table) {
           $table->increments('id');
           $table->text('nazwa');
           $table->integer('ilosc');
           $table->date('data_waznosci');
           $table->double('cena');
           $table->integer('pozostalo');
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
        Schema::drop('apteczkas');
    }
}
