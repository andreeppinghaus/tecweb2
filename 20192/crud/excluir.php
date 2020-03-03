<?php

require_once "Usuario.php";
require_once "Banco.php";

$banco = new Banco();
$usuario  = new Usuario($banco);
$usuario->hydrate($_GET);

$usuario->excluir();
header("Location: http://localhost/menu.php");