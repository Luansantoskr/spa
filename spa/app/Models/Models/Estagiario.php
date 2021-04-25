<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estagiario extends Model
{
    use HasFactory;

    protected $table = 'estagiarios';

    protected $fillable = [
        'estagiario',
        'matricula',
        'semestre',
        'telefone',
        'email',
    ];
}
