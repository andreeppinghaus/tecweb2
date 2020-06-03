<?php
session_start();

include_once "service/AutenticacaoService.php";

$auth = new AutenticacaoService();
$auth->deslogar();
