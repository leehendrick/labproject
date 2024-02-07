<?php

namespace App\Http\Controllers;

use App\Models\Receita;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class ReceitaController extends Controller
{
    public function index(): View
    {
        $receitas = Receita::all();
        return  view('receita.index')->with('receitas', $receitas);
    }

    public function create(): View
    {
        return view('receita.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Receita::create($input);
        return redirect('receita')->with('flash_message', 'Receita Adicionada!');
    }

    public function show($id)
    {
        $receita = Receita::find($id);
        return view('receita.update')->with('receitas', $receita);
    }

    public function edit($id): View
    {
        $receita = Receita::findOrFail($id);
        return view('receita.edit')->with('receitas', $receita);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $receita = Receita::findOrFail($id);
        $receita->update($request->all());
        return redirect('receita')->with('flash_message', 'Receita Atualizada!');
    }

    public function destroy($id): RedirectResponse
    {
        $receita = Receita::findOrFail($id);
        $receita->delete();

        return redirect('receita')->with('flash_message', 'Receita Eliminada!');
    }
}
