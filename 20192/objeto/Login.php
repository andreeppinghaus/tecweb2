<?php
require_once ("Banco.php");
/**
 * Classe para verificar o login 
 * e senha
 */
class Login {
    /**
     * nome do usuario
     */
    private $nome;
    /**
     * senha do usuário
     */
    private $senha;
    
    private $banco;
    public function __construct($banco){
        $this->banco = $banco;
    }
    public function setNome($nome) {
        $this->nome =$nome;
    }
    public function setSenha($senha) {
        $this->senha =$senha;
    }
    public function verifica() {
        $consulta= $this->banco->consultar();
        
    }
}