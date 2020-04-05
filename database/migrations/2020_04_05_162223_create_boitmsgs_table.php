<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoitmsgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boitmsgs', function (Blueprint $table) {
            $table->increments('idMsg');
            $table->integer('numClient');
            $table->text“('objet');
            $table->text('message');
            $table->integer('vu');
            $table->dateTime('date');
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
        Schema::dropIfExists('boitmsgs');
    }
}
