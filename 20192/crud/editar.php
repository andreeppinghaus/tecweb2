<?php

require_once "Usuario.php";
require_once "Banco.php";


$id=$_GET['id'];


$banco = new Banco();
$usuario  = new Usuario($banco);

$linhas = $usuario->consultar($id);

foreach ($linhas as $linha) {
    $login=$linha['login'];
    $senha=$linha['senha'];
}

echo "
<form action=salvar.php>
<input type=hidden name=id value=$id>

<p>Login</p>
<input type=text name=login value='$login'>
<br>
<p>Senha</p>
<input type=text name=senha value='$senha'>
<br>
<input type=submit>
</form>";