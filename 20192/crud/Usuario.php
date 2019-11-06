<?php

require_once ("Banco.php");
/**
 * Classe para verificar o login 
 * e senha
 */
class Usuario {
    private $banco;
    private $id, $login, $senha;

    public function __construct($banco){
        $this->banco = $banco;
    }
    public function consultar($id=null) {
        if (empty($id)) {
            $sql = "select * from usuario order by login";
        }else {
            $sql = "select * from usuario where id=$id";
        }

        return $this->banco->consultar($sql);
    }
    public function incluir() {
        $sql = "insert into usuario(login, senha)
         values ('".$this->login."', '".$this->senha."')";
        return $this->banco->exec($sql);
    }
    public function alterar() {
        $sql = "update usuario 
           set login ='".$this->login."',
               senha='".$this->senha."' 
            where id = ".$this->id;
        return $this->banco->exec($sql);
    }
    public function excluir() {
        $sql = "delete from  usuario 
            where id = ".$this->id;
        return $this->banco->exec($sql);
    }

    public function hydrate($form) {
        
        if (isset($form['id'])) {
            $this->id=$form['id'];
        }

        if (isset($form['login'])) {
            $this->login=$form['login'];
        }
        if (isset($form['senha'])) {
            $this->senha=$form['senha'];
        }
        
    }
}