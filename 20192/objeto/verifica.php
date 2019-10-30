<?php
require_once "Login.php";
require_once "Banco.php";
$email=$_GET["inputEmail"];
$senha=$_GET["inputPassword"];

$banco = new Banco();
$login = new Login($banco);

$login->setNome($email);
$login->setSenha($senha);

if ($login->verifica()) {
    header("Location: http://menu.php");
}else {
    echo "<script> alert('Login e senha invalidos'); </script>";
    header("Location: http://index.php");
}
