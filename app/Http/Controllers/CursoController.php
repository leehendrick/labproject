<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Inertia\Inertia;

class CursoController extends Controller
{
    public function index()
    {
        return Curso::all();
    }

    public function store ()
    {

    }

    public function show (Curso $curso)
    {
        return $curso;
    }

    public function update ()
    {

    }

    public function destroy ()
    {

    }
}
