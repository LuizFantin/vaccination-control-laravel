<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAplicacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aplicacaos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cidadao_id');
            $table->foreign('cidadao_id')->references('id')->on('cidadaos')->onDelete('cascade');
            $table->foreignId('vacina_id');
            $table->foreign('vacina_id')->references('id')->on('vacinas')->onDelete('cascade');
            $table->string('dose');
            $table->string('data_de_aplicacao');
            $table->string('aplicador');
            $table->string('unidade_de_saude');

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
        Schema::dropIfExists('aplicacaos');
    }
}
