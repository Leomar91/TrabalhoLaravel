<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    // Definir quais campos podem ser preenchidos em massa
    protected $fillable = ['nome', 'preco', 'categoria_id', 'descricao'];

    // Definir o relacionamento com o modelo Categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
