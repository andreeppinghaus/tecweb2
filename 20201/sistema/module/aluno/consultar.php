<?php
session_start();

include_once "../../service/AutenticacaoService.php";
include_once "../../service/BancoService.php";

$auth = new AutenticacaoService();

$auth->verificaLogin();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Consultar Aluno</title>
  </head>
  <body>
    <h1>Módulo de Cadastro de Alunos</h1>
    
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Matricula</th>
          <th scope="col">Nome</th>
          <th scope="col">Idade</th>
        </tr>
      </thead>
       <tbody>
           
    <?php
    
    $banco = new BancoService();
    
    $sql = "select * from aluno";
    
    $resultado = $banco->query($sql);
    
    $html='';
    
    foreach ($resultado as $linha) {
        
        echo "Nome".$linha["nome"]."<br>";
        $html .= '
        <tr>
          <th scope="row">'.$linha["id"].' </th>
          <td>'.$linha["matricula"].'</td>
          <td>'.$linha["nome"].'</td>
          <td>'.$linha["idade"].'</td>
        </tr>
        ';
        
    }
    
    echo $html;
    
    ?>
  </tbody>
</table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>