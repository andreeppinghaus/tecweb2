<?php

require_once "Usuario.php";
require_once "Banco.php";

$banco = new Banco();
$usuario  = new Usuario($banco);


$linhas = $usuario->consultar();

echo "<a href=incluir.php>Incluir.php</a><br><br>";

echo "<table border=1>";
echo "<tr><th> Login </th><th>Senha</th><th></th><th></th></tr>";    
foreach ($linhas as $linha) {
echo "<tr><td>".$linha['login']."</td>";
echo "<td>".$linha['senha']."</td>";
echo "<td> <a href=editar.php?id=".$linha['id'].">Editar</a></td>";
echo "<td> <a href=excluir.php?id=".$linha['id'].">Excluir</a></td>";
}
echo "</table>";

