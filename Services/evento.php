<?php

class Evento {
    private $nome;
    private $data;
    private $local;
    private $descricao;
    
    public function __construct($nome, $data, $local, $descricao) {
        $this->nome = $nome;
        $this->data = $data;
        $this->local = $local;
        $this->descricao = $descricao;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function getData() {
        return $this->data;
    }
    
    public function getLocal() {
        return $this->local;
    }
    
    public function getDescricao() {
        return $this->descricao;
    }
    
    public function exibirDetalhes() {
        echo "Nome: {$this->nome}<br>";
        echo "Data: {$this->data}<br>";
        echo "Local: {$this->local}<br>";
        echo "Descrição: {$this->descricao}<br>";
    }
}

// Exemplo de uso da classe Evento
$evento = new Evento("Tecnologia Senac", "2024-03-20", "Senac", "Um evento sobre os últimos avanços em tecnologia.");
$evento->exibirDetalhes();
