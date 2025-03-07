<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'data_de_nascimento',
    ];

    public function estudante(): HasMany
    {
        return $this->hasMany(Estudante::class, 'pessoa_id');
    }
}
