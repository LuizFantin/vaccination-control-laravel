<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCidadaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidadaos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf')->unique();
            $table->string('data_nascimento');
            $table->string('nome_da_mae');
            $table->string('sexo');
            $table->string('estado_civil');
            $table->string('escolaridade');
            $table->string('etnia');
            $table->string('cns');
            $table->string('telefone');
            $table->string('cep');
            $table->string('logradouro');
            $table->string('bairro');
            $table->integer('numero');
            $table->string('cidade');
            $table->string('uf');
            $table->boolean('possui_plano_de_saude');
            $table->timestamps();

            $table->index(['nome', 'data_nascimento']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cidadaos');
    }
}
