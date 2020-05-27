<?php

class ClienteModel {
    protected $nome;
    private $idade;
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getNome() {
        return $this->nome;
    }
}


