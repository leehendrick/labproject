<?php

namespace App\Http\Controllers;

use App\Models\Inscricoes;
use Illuminate\Http\Request;

class InscricoesController extends Controller
{
    public function index()
    {
        return Inscricoes::all();
    }

    public function create()
    {

    }

    public function  store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'sexo' => 'required',
            'bi' => 'required',
            'instituicao' => 'required',
            'grau_academico' => 'required',
            'tipo',
        ]);

        return Inscricoes::create($request->all());

    }

    public function show(Inscricoes $inscricoes)
    {
        return $inscricoes;
    }

    public function edit(Inscricoes $inscricoes)
    {

    }

    public function update(Request $request, Inscricoes $inscricoes)
    {

    }

    public function destroy(Inscricoes $inscricoes)
    {

    }
}
