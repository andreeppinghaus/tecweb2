<?php

class BancoService1 {
    private $dsn;
    private $user;
    private $password;
    private $pdo;
    
    function __construct($dsn, $user, $password) {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->password = $password;
        
        $this->connect();
    }
    
    public function connect() {
        try {
            $this->pdo = new PDO($this->dsn, $this->user, $this->password);
            // print "conectou";
            
        } catch (PDOException $e) {
            echo 'Erro de conexão: ' . $e->getMessage();
            
        }
    }
    
    public function exec($sql) {
        $contador = $this->pdo->exec($sql);
        return $contador;
    }
    
    public function query($sql) {
        
        foreach ($this->pdo->query($sql) as $row) {
            print"<br>";
            print $row['id'] . "-----------";
            print $row['login'] . "\t";
            print $row['senha'] . "\t";
        }
        
    }
}

$dsn = "mysql:dbname=id13482607_aula_php;host=localhost";
$user='id13482607_root';
$password='andre_Eppinghaus1234';

$banco = new BancoService1($dsn, $user, $password);

/*
$sql = "insert into usuario(login, senha) values('teste4', '564')";
$contador = $banco->exec($sql);

echo "<p> Incluiu $contador - Registro(s)";
*/

$sql = 'SELECT * from usuario';
$banco->query($sql);


