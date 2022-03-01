<?php

namespace App\Http\Controllers;

use App\Models\Aplicacao;
use App\Models\Vacina;
use Illuminate\Http\Request;

class VacinaController extends Controller
{
    public function index()
    {
        $vacinas = Vacina::all();

        return view('vacina', compact('vacinas'));
    }

    public function create()
    {
        return view('create_vacina');
    }

    public function store(Request $request)
    {
        Vacina::create($request->all());
        return redirect(route('vacinas'));
    }

    public function list_cidadaos($id)
    {
        $vacina = Vacina::find($id);
        $aplicacoes = Aplicacao::where('vacina_id', $id)->get();

        return view('list_cidadaos_por_vacina', compact('aplicacoes', 'vacina'));
    }
}
