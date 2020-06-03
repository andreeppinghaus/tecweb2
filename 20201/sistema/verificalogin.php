<?php
session_start();

include_once "service/BancoService.php";

$login = $_POST["email"];
$senha = $_POST["senha"];

// echo "Login $login  e $senha<br>";

$sql = "select * from usuario where login = '$login' and senha = '$senha'";

// echo $sql;

$banco = new BancoService();

$resultado = $banco->query($sql);

 if ($resultado->fetchColumn() > 0) {
    //echo "existe";
    $_SESSION["logou"] = true;
    
    header("Location: https://aula-php-andre-eppinghaus.000webhostapp.com/sistema/menu.php"); 
    
 }else {
  header("Location: https://aula-php-andre-eppinghaus.000webhostapp.com/index.html"); 
  session_destroy();
 }
 