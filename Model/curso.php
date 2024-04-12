<?php

class Curso {
    private $id;
    private $nomeCurso;
    
    public function __construct($id, $curso) {
        $this->id = $id;
        $this->nomeCurso = $curso;
    }
    
    public function getCurso() {
        return $this->nomeCurso;
    }
}
