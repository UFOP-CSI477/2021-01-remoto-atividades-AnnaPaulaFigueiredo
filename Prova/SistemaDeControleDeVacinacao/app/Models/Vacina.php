<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Registro;

class Vacina extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'fabricante', 'pais', 'doses'];
    
    public function registros(){

        return $this->hasMany('App\Models\Registro');

    }
}
