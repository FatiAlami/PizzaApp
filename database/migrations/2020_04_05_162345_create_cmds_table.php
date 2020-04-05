<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cmds', function (Blueprint $table) {
            $table->increments('numCommande');
            $table->integer('numClient');
            $table->timestamp('date');
            $table->text('adressLiv');
            $table->text('type');
            $table->integer('realise');
            $table->text('secteur');
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
        Schema::dropIfExists('cmds');
    }
}
