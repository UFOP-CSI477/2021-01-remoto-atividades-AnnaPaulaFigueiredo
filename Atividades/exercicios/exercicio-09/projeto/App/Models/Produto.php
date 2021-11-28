<?php

namespace App\Models;

class Produto implements ModelInterface {

    private $id, $nome, $preco;

    public function __construct($id, $nome, $preco) {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
    }
    
    public function __destruct() {
        
    }

    public function getAll(){


    }

    public function get($id){

        
    }
    
}

