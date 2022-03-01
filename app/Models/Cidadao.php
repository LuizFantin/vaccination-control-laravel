<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidadao extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'data_nascimento',
        'nome_da_mae',
        'sexo',
        'estado_civil',
        'escolaridade',
        'etnia',
        'cns',
        'telefone',
        'cep',
        'logradouro',
        'bairro',
        'numero',
        'cidade',
        'uf',
        'possui_plano_de_saude'
    ];

    public function aplicacoes()
    {
        return $this->hasMany(Aplicacao::class, 'cidadao_id');
    }
}
