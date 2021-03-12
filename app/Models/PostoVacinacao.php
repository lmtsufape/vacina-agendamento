<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostoVacinacao extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'endereco'];

    public function lotes()
    {
        return $this->belongsToMany(Lote::class);
    }
}
