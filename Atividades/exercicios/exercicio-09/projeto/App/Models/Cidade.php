<?php

namespace App\Models;

class Cidade implements ModelInterface {

    private $id, $nome, $siglaEstado;

    public function __construct($id, $nome, $siglaEstado) {
        $this->id = $id;
        $this->nome = $nome;
        $this->siglaEstado = $siglaEstado;
    }
    
    public function __destruct() {
        
    }

    public function getAll(){


    }

    public function get($id){

        
    }
    
}

