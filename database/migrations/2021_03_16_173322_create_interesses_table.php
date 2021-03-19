<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInteressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interesses', function (Blueprint $table) {
            $table->id();
            $table->integer('etatConge');
            $table->string('nomInteresse');
            $table->string('prenomInteresse');
            $table->integer('CIN');
            $table->date('dateNais');
            $table->string('acteNais');
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
        Schema::dropIfExists('interesses');
    }
}
