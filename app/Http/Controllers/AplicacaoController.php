<?php

namespace App\Http\Controllers;

use App\Models\Aplicacao;
use App\Models\Cidadao;
use App\Models\Vacina;
use Illuminate\Http\Request;

class AplicacaoController extends Controller
{
    public function index()
    {
        $aplicacoes = Aplicacao::all();

        return view('aplicacao', compact('aplicacoes'));
    }

    public function create()
    {
        $cidadaos = Cidadao::all();
        $vacinas = Vacina::all();
        return view('create_aplicacao', compact('cidadaos', 'vacinas'));
    }

    public function store(Request $request)
    {
        Aplicacao::create($request->all());
        return redirect(route('aplicacoes'));
    }
}
