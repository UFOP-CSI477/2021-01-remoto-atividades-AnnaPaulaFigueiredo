<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'bairro', 'cidade', 'estado', 'data_nascimento', 'cpf'];

    public function registros(){

        return $this->hasMany('App\Models\Registro');

    }
}
