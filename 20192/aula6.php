<?php
$usuario = $_REQUEST['usuariolala'];
$senha = $_REQUEST['senhalala'];

if ($usuario=='adm@adm' && $senha =='123') {
    echo "<br><br>Usuario = $usuario e senha = $senha";
}else {
    echo "<br><br>Usuario e senha invalidos";
}

?>