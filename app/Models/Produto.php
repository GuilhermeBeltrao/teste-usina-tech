<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nome',
        'marca_id',
        'categoria_id'
    ];

    public function marcas() {
        return $this->belongsTo(Marca::class);
    }
    
    public function categorias() {
        return $this->belongsTo(Categoria::class);
    }
}
