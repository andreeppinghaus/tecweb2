<?php
class BancoService {

    private $dsn;
    private $user;
    private $password;
    private $dbh;
    
    function __construct($dsn, $user, $password) {
    
        $this->dsn = $dsn;
        $this->user= $user;
        $this->password = $password;
        
       $this->connect();
    }
    
    
    private function connect() {
    
        try {
            $this->dbh = new PDO($this->dsn, $this->user, $this->password);
        } catch (PDOException $e) {
            echo 'Falha na conexão: ' . $e->getMessage();
        }
    
    }
    
    public function exec($sql){
        $contador = $this->dbh->exec($sql);
        return $contador;
    }
    
    public function query($sql){
        
        foreach ($this->dbh->query($sql) as $row) {
            print "<br>";
            print $row['id'] . "\t";
            print $row['login'] . "\t";
            print $row['senha'] . "\t";
        }
    }

}

$dsn = 'mysql:dbname=id13482607_aula_php;host=localhost';

$user ='id13482607_root';
$password = 'andre_Eppinghaus1234';

$banco = new BancoService($dsn, $user, $password);
/*
//inclusao de registro
$sql="insert into usuario(login,senha) values('admin', '123')";

$contador = $banco->exec($sql);
echo "<b>Incluiu $contador - registro(s)";
*/




$sql = "select * from usuario";
$banco->query($sql);




