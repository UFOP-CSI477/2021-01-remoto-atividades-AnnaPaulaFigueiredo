<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receitas extends Model
{
    use HasFactory;

    public $timestamps=true;
    protected $table='receitas';

    protected $fillable=['nome', 'tempo', 'qnt_pessoas', 'ingredientes', 'modo_de_preparo', 'tipo'];

    
}
