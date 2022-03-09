<?php

namespace App\Http\Controllers;

use App\Models\Aplicacao;
use App\Models\Cidadao;
use App\Models\Vacina;
use Illuminate\Http\Request;

class CidadaoController extends Controller
{
    public function index()
    {
        $cidadaos = Cidadao::all();

        return view('cidadao', compact('cidadaos'));
    }

    public function create()
    {
        return view('create_cidadao');
    }

    public function store(Request $request)
    {
        if(!Cidadao::validaCPF($request->cpf))
            return redirect()->back()->with('danger', 'CPF inválido');
        Cidadao::create($request->all());
        return redirect(route('cidadaos'))->with('success','Cidadão cadastrado com sucesso!');
    }

    public function list_vacinas($id)
    {
        $cidadao = Cidadao::find($id);
        $aplicacoes = Aplicacao::where('cidadao_id', $id)->get();

        return view('list_vacinas_por_cidadao', compact('aplicacoes', 'cidadao'));
    }
}
