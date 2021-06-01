<?php
session_start();
require_once("autenticacao.php");
require_once("Banco.php");
require_once("Entity/ProdutoQuartaEntity.php");

// var_dump($_POST);

$produto = new ProdutoQuartaEntity($_POST);

// var_dump($produto->getUpdate() ) ; die();

$pdo = new Banco();

$linhas = $pdo->exec($produto->getUpdate());

if ($linhas>0) {
    header('Location: http://localhost/20211/aula_terca/alterarProduto.php?aviso=1&id='.$_POST['id']);
}else {
    header('Location: http://localhost/20211/aula_terca/alterarProduto.php?aviso=2');
}


?>