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
        //nao estou protegendo para sql injection
        $sql = "select * from usuario 
            where login='".$this->nome."' and 
            senha='".$this->senha."'";
        $consulta= $this->banco->consultar($sql);

        $autenticado=false;

        foreach ($consulta as $row) {
            if (isset($row['login']) ) {
                if (!empty($row['login'])){
                    $autenticado=true;
                }
            }
        }
        return $autenticado;
    }
}