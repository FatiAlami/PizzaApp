<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLignecommandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lignecommands', function (Blueprint $table) {
            $table->increments('ligneID');
            $table->integer('numCommande');
            $table->integer('codeProduit');
            $table->integer('prix');
            $table->integer('nb');
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
        Schema::dropIfExists('lignecommands');
    }
}
