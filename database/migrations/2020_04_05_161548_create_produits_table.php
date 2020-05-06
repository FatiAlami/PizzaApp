<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->increments('codeProduit');
            $table->text('nom');
            $table->float('prix');
            $table->integer('category_id');
            $table->integer('remise');
            $table->dateTime('date_debut');
            $table->dateTime('date_fin');
            $table->integer('isPromo');
            $table->text('imgPath');
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
        Schema::dropIfExists('produits');
    }
}
