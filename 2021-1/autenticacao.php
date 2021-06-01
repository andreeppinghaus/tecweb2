<?php
if (! isset($_SESSION["autenticado"])){
    
    header('Location: http://localhost/20211/aula_terca/index.php');
}