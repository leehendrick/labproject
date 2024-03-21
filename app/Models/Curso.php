<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'duracao',
        'horario',
        'data_inicio',
        'data_termino',
        'modulos',
        'vagas',
        'requisitos',
        'preco',
        'nota',
        'criado_por',
        'local',
    ];
}
