<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinhasReceitas extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $table='minhas_receitas';

    protected $fillable=['nome', 'tempo', 'qnt_pessoas', 'ingredientes', 'modo_de_preparo', 'tipo'];
}
