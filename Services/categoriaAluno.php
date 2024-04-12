<?php

class CategoriaAluno {
    private $id;
    private $descricao;

    public function __construct($id, $descricao){
        $this->id = $id;
        $this->descricao = $descricao;
    }

    public function getCategoria(){
        return $this->descricao;
    }
}
