<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function index()
    {
        return Horario::all();
    }

    public function show ($id)
    {
        $horario = Horario::find($id);
        return response()->json(['horario' => $horario]);
    }
}
