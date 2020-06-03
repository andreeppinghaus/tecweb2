<?php

session_start();

include_once "service/AutenticacaoService.php";

$auth = new AutenticacaoService();

$auth->verificaLogin();
 
echo "<h1>Menu</h1>";
echo "<div><a href=deslogar1.php>Sair</a></div>";

echo "<div><a href=module/produto/consultar.php>Cadastro de Produtos</a></div>";