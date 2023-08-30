<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaisseauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaisseaux', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->float('barreEssence');
            $table->float('barreVie');
            $table->bigInteger('nbTotalMunition');
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
        Schema::dropIfExists('vaisseaux');
    }
}
