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
        $vacina = Vacina::find($request->vacina_id);
        if($request->dose > $vacina->quantidade_de_doses)
            return redirect()->back()->with('danger','Dose não coerente com a quantidade de doses da vacina');
        Aplicacao::create($request->all());
        return redirect(route('aplicacoes'))->with('success','Aplicação cadastrada com sucesso!');
    }
}
