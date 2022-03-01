<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacina extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'fabricante',
        'lote',
        'data_de_validade',
        'quantidade_de_doses',
        'doenca'
    ];

    public function aplicacoes()
    {
        return $this->hasMany(Aplicacao::class, 'vacina_id');
    }
}
