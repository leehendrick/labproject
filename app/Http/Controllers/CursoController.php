<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Inertia\Inertia;
use Illuminate\Http\Request;
class CursoController extends Controller
{
    public function index()
    {
        return Curso::all();
    }

    public function store (Request $request)
    {
      /*  $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'data_inicio' => 'required',
            'data_termino' => 'required',
            'vagas' => 'required',
            'local' => 'required',
            'preco' => 'required',
            'modulos' => 'required',
            'nota' => 'required',
            'requisitos' => 'required',
            'duracao' => 'required',
            'horario' => 'required',
            'criado_por' => 'required',
        ]);*/

        return Curso::create($request->all());
    }

    public function show ($id)
    {
        $curso = Curso::find($id);
        return response()->json(['curso' => $curso]);
    }

    public function update ()
    {

    }

    public function destroy ()
    {

    }
}
