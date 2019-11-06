<?php

require_once "Usuario.php";
require_once "Banco.php";

$banco = new Banco();
$usuario  = new Usuario($banco);

$usuario->hydrate($_GET);
if (! isset($_GET['id'])) {
    $usuario->incluir();
}else {
    $usuario->alterar();
}

header("Location: http://localhost/menu.php");