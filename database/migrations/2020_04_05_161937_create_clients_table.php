<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('numClient');
            $table->text('nom');
            $table->text('prenom');
            $table->text('adresse');
            $table->text('email');
            $table->text('login');
            $table->text('motdepasse');
            $table->text('ca');
            $table->text('date_inscr');
            $table->text('imgPath');
            $table->text('admin');
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
        Schema::dropIfExists('clients');
    }
}
