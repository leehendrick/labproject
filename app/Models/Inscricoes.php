<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscricoes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'sexo',
        'bi',
        'instituicao',
        'grau_academico',
        'tipo',
    ];
}
