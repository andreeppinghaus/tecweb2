<?php
session_start();
require_once("autenticacao.php");
require_once("Banco.php");
require_once("Entity/ProdutoQuartaEntity.php");

// var_dump($_POST);

$produto = new ProdutoQuartaEntity($_POST);

// var_dump($produto->getDelete() ) ; die();

$pdo = new Banco();

$linhas = $pdo->exec($produto->getDelete());

header('Location: http://localhost/20211/aula_terca/consultaProduto.php');


?>