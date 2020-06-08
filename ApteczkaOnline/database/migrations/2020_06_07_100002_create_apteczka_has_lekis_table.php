<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApteczkaHasLekisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apteczka_has_lekis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('apteczka_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('lek_id');
            $table->timestamps();
        });

        Schema::table('apteczka_has_lekis', function (Blueprint $table){
            $table->foreign('apteczka_id')
                ->references('id')
                ->on('apteczkas');
        });

        Schema::table('apteczka_has_lekis', function (Blueprint $table){
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });

        Schema::table('apteczka_has_lekis', function (Blueprint $table){
            $table->foreign('lek_id')
                ->references('id')
                ->on('ListaLekow');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apteczka_has_lekis');
    }
}
