<?php

namespace App\Http\Controllers;

use App\Models\Receita;
use Illuminate\Http\Request;

class ReceitaController extends Controller
{
    public function index()
    {
        $receita = Receita::all();
        return view('receita.index', compact('receita'));
    }

    public function create()
    {
        $receita = Receita::all();
        return view('receita.create', compact('receita'));

    }

    public function store(Request $request)
    {
        Receita::create($request->all());
        return redirect()->route('receita.comfirm');

    }

    public function show($id)
    {
        $receita = Receita::findOrFail($id);
        return view('receita.show', compact('receita'));
    }

    public function edit($id)
    {
        $receita = Receita::findOrFail($id);
        return view('receita.edit', compact('receita'));
    }

    public function update(Request $request, $id)
    {
        $receita = Receita::findOrFail($id);
        $receita->update($request->all());
        return view('receita.index');
    }

    public function destroy($id)
    {
        $receita = Receita::findOrFail($id);
        $receita->delete();
        return redirect()->route('receita.index');
    }
}
