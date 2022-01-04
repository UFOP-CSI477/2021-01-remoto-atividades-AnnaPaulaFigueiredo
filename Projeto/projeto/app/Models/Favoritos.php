<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favoritos extends Model
{
    use HasFactory;

    public $timestamps=true;
    protected $table='favoritos';

    protected $fillable=['nome', 'tempo', 'qnt_pessoas', 'ingredientes', 'modo_de_preparo', 'tipo'];
}
