<?php
session_start();
if (! isset($_SESSION["autenticado"])){
    
    header('Location: http://localhost/20211/aula_terca/');
}

require_once("Banco.php");
require_once("Entity/ProdutoQuartaEntity.php");

//var_dump($_POST);

$produto = new ProdutoQuartaEntity($_POST);
echo "<br><br>";
echo $produto->getInsert();

$pdo = new Banco();

$linhas = $pdo->exec($produto->getInsert());

if ($linhas>0) {
    header('Location: http://localhost/20211/aula_terca/incluirProduto.php?aviso=1');
}else {
    echo "erro";
}


?>