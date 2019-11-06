<?php

class Banco {
    private $pdo;
    public function __construct(){
        $this->conectar();
    }
    public function conectar(){
        //postgres 
        $dsn = 'pgsql:dbname=aulaphp;host=127.0.0.1';
        $user = 'postgres';
        $password = 'admlinux';
        try {
        $this->pdo = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        die();       
        }
        //mysql
        // $dsn = 'mysql:dbname=aulaphp;host=127.0.0.1';
        // $user = 'root';
        // $password = '';
        // try {
        // $dbh = new PDO($dsn, $user, $password);
        // } catch (PDOException $e) {
        // echo 'Connection failed: ' . $e->getMessage();
        // }
    }
    public function consultar($sql=null){
        return $this->pdo->query($sql);
    }

    public function exec($sql=null){
        return $this->pdo->exec($sql);
    }
}