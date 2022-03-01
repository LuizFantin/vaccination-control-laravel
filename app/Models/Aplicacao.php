<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplicacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'cidadao_id',
        'vacina_id',
        'dose',
        'data_de_aplicacao',
        'aplicador',
        'unidade_de_saude'
    ];

    public function cidadao()
    {
        return $this->belongsTo(Cidadao::class, 'cidadao_id');
    }

    public function vacina()
    {
        return $this->belongsTo(Vacina::class, 'vacina_id');
    }
}
