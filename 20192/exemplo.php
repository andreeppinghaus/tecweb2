<?php

//var_dump ($_GET);
$formulario = $_GET;
foreach($formulario as $key=>$value) {
echo "<p> chave[$key] / valor ==$value </p>";

}
