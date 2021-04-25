<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $table = 'agendas';

    protected $fillable = [
        'nome',
        'idade',
        'naturalidade',
        'civil',
        'grau',
        'endereco',
        'municipio',
        'fone',
        'mae',
        'pai',
        'nascimentoMae',
        'nascimentoPai',
    ];

}
