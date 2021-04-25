<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordenador extends Model
{
    use HasFactory;

    protected $table = 'coordenadors';

    protected $fillable = [
        'nome',
        'crp',
        'telefone',
        'email',
    ];
}
