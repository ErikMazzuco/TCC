<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    header("Location: ../index.php");
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"index.php\">Entrar</a></p>");
}
?>


<?php 
if(isset($_SESSION['id'])) {


if (($_SESSION['id'] != '1')){
    header("Location: ../index.php");
    }
}
?>


<?php
include_once('../../LOGIN/conexao.php')

$sql = "SELECT * FROM usuarios ORDER BY id DESC";





?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USUARIOS</title>
</head>
<body>
    




</body>
</html>