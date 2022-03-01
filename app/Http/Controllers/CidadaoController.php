<?php

namespace App\Http\Controllers;

use App\Models\Cidadao;
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
        Cidadao::create($request->all());
        return redirect(route('cidadaos'));
    }
}
