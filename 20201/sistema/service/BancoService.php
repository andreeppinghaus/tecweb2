<?php
class BancoService {

    private $dsn;
    private $user;
    private $password;
    private $dbh;
    
    function __construct($dsn="", $user="", $password="") {
    
        if (empty($dsn) ) {
                        //  'mysql:dbname=id13482607_aula_php;host=localhost'
            $this->dsn = 'mysql:dbname=id13482607_aula_php;host=localhost';
            $this->user= 'id13482607_root';
            $this->password = 'andre_Eppinghaus1234';
            
        }else {
            $this->dsn = $dsn;
            $this->user= $user;
            $this->password = $password;
                
        }
        
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
        return $this->dbh->query($sql);
    }

}


// $dsn = 'mysql:dbname=id13482607_aula_php;host=localhost';

// $user ='id13482607_root';
// $password = 'andre_Eppinghaus1234';


/*
//inclusao de registro
$sql="insert into usuario(login,senha) values('admin', '123')";

$contador = $banco->exec($sql);
echo "<b>Incluiu $contador - registro(s)";


$banco = new BancoService();

$sql = "select * from usuario";
$dados = $banco->query($sql);


foreach ( $dados as $linha) {
    echo "<br>";
    echo $linha["id"] ." - ". $linha["login"]." = ".$linha["senha"];

}

*/