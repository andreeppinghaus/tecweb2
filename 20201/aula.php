

<html>
<head>
 <title>Aula 1 de PHP </title>
 <style>
 .cor {color:green}
 </style>
 <head>
 <body>
<h1> teste </h1>

<br>
<form action=exibe.php method=get>
<p>Nome</p>
<input type=text name=nome>
<br>
<p>Idade</p>
<input type=text name=idade>
<br>
<input type=submit>
</form>

<?php

$alunos = [
    'aluno1',
    'aluno2',
    'aluno3'
];
//var_dump($alunos);

foreach ($alunos as $aluno ) {
    echo "<br>Aluno = $aluno";
}
?>
</body>
 <html>