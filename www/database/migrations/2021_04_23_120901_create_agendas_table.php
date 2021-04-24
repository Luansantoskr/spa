<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('idade');
            $table->string('Naturalidade');
            $table->string('civil');
            $table->string('grau');
            $table->string('endereco');
            $table->string('municipio');
            $table->string('fone');
            $table->string('mae');
            $table->string('pai');
            $table->string('nascimentoMae');
            $table->string('nascimentoPai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendas');
    }
}
