<?php
session_start();

include_once "service/BancoService1.php";

$login = $_POST["email"];
$senha = $_POST["senha"];

// echo "$login e $senha";

$banco = new BancoService1();

$sql ="select * from usuario1 where login='$login' and senha='$senha' ";

// echo $sql;

$banco = new BancoService1();

$resultado = $banco->query($sql);

if ( $resultado->fetchColumn() > 0) {
    // echo "senha ok";
    $_SESSION["logou"]= true;
    
    header("Location: https://aula-php-andre-eppinghaus.000webhostapp.com/sistema/menu1.php"); 
}else {
    session_destroy();
    // echo "senha errada";
    header("Location: https://aula-php-andre-eppinghaus.000webhostapp.com/index.html");
    
}
