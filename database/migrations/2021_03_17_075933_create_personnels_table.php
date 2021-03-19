<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->string('nomPersonnel');
            $table->string('prenomPersonnel');
            $table->date('dateNais');
            $table->string('lieuNais');
            $table->string('sexe');
            $table->integer('CIN');
            $table->string('situation');
            $table->integer('nbEnfant');
            $table->string('adresse');
            $table->string('mail');
            $table->integer('telephone');
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
        Schema::dropIfExists('personnels');
    }
}
