<?php

namespace App\Http\Controllers;

use App\Models\Duracao;
use Illuminate\Http\Request;

class DuracaoController extends Controller
{
    public function index()
    {
        return Duracao::all();
    }

    public function show ($id)
    {
        $horario = Duracao::find($id);
        return response()->json(['horario' => $horario]);
    }
}
