<?php
session_start();

include_once "service/AutenticacaoService.php";

$auth = new AutenticacaoService();

$auth->verificaLogin();


echo "<h1> Menu</h1>";
echo "<div> <a href=deslogar.php> Sair </a></div>";
echo "<div> <a href=module/aluno/consultar.php> Cadastro de Alunos </a></div>";

