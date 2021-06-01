<?php
session_start();
require_once("autenticacao.php");
require_once("Banco.php");
require_once("Entity/ProdutoQuartaEntity.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <title>Tela de edição de produto</title>
  </head>
  <body>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    
    <div class="container">
        
        <h1>Produtos cadastrados </h1>
        <br><br>

        <?php
         if (isset($_GET["aviso"])) {
            if ($_GET["aviso"] == 1 ) {
              echo '<br><div class="alert alert-primary" role="alert">
              Incluído com sucesso !!!
            </div>';
            }else if ($_GET["aviso"] == 2 ){
              echo '<br><div class="alert alert-danger" role="alert">
              Erro na inclusão
            </div>';
            }
          }

        
        if (! isset($_GET["id"])) {
            echo '<br><div class="alert alert-danger" role="alert">
            Faltou o id do produto !!!!
            </div>';
            die();
        }
        $id = $_GET["id"];
        // var_dump($_GET["id"]);die();
        $pdo = new Banco();
        // var_dump($_GET);    
        foreach($pdo->query('SELECT * from produto_quarta where id ='.$id ) as $row) {
            // $produto = new ProdutoQuartaEntity($row);
            // $pdo->exec( $produto->getUpdate() ) ; 
           
        }

        // var_dump($row) ;die();
     

      echo '
      <form action="alterar.php" method="post">

        <input type="hidden" name="id" value='.$row['id'].'>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Titulo</label>
              <input type="text" class="form-control" id="exampleFormControlInput1"
               name="titulo" value='.$row['titulo'].'
              >
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
              <textarea class="form-control" id="exampleFormControlTextarea1"
              name="descricao" rows="3" >'.$row['descricao'].'</textarea>
            </div>
             <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Valor</label>
              <input type="number" min="0" step="0.1" class="form-control" id="exampleFormControlInput1"
               name="valor" value='.$row['valor'].'
              >
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">URL</label>
              <input type="text" class="form-control" id="exampleFormControlInput1"
               name="url" value='.$row['url'].'
              >
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Código de barras</label>
              <input type="text" class="form-control" id="exampleFormControlInput1"
               name="codigo_barra" value='.$row['codigo_barra'].'
              >
            </div>
              
            <input type="submit" value="Salvar" class="btn btn-success" role="button">
        </form>
        ';

      ?>
        
        
    
     

    <br><br>
    </div>

    <script>
        
    </script>
  </body>
</html>
