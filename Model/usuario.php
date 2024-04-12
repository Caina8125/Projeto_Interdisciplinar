<?php

class Usuario {
    private $id;
    private $nome;
    private $sobreNome;
    private $matricula;
    private $cpf;
    private $senha;
    private $email;
    private $turno;

    public function __construct($id, $nome, $sobreNome, $matricula, $cpf, $senha, $turno,$email) {
        $this->id = $id;
        $this->nome = $nome;
        $this->sobreNome = $sobreNome;
        $this->matricula = $matricula;
        $this->cpf = $cpf;
        $this->senha = $senha;
        $this->email = $email;
        $this->turno = $turno;
        
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function getEmail() {
        return $this->email;
    }

    public function getSobreNome(){
        return $this->sobreNome;
    }
    
    public function getMatricula(){
        return $this->matricula;
    }

    public function getTurno(){
        return $this->turno;
    }
}
