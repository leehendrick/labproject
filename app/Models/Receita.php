<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    public $timestamps = true;
    use HasFactory;

    protected $fillable = [
        'id_turma',
        'data_recebimento',
        'valor_arrecadado',
        'descricao'
    ];
}
