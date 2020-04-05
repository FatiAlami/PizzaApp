<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmdformligneproduitsProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cmdformligneproduits_produits', function (Blueprint $table) {
            $table->increments('idFormLigneProd');
            $table->number('ligneID');
            $table->text“('codeProduit');
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
        Schema::dropIfExists('cmdformligneproduits_produits');
    }
}
