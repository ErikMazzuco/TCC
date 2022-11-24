<?php
session_start();
include_once("../../login/conexao.php");

$titulo = $_POST ['titulo'];
$autor = $_POST ['autor'];
$ano = $_POST ['ano'];
$estoque = $_POST ['estoque'];
$sobre = $_POST ['sobre'];


$result = "INSERT INTO livros (titulo,autor,ano,sobre,datain) VALUES ('$titulo','$autor','$ano','$sobre','now()')";

$query = mysqli_query ($mysqli,$result);

//se inserir com sucesso
//apresenta msg caso der certo

if(mysqli_insert_id($mysqli)){

    $_SESSION['msg'] = "<p style= 'color:green;'>livro cadastrado</p>";
    header("index.php");
    }else{
    $_SESSION['msg'] = "<p style='color:red;'> não foi POSSIVEL cadastrar O LIVRO</p>";
    header("index.php");
    }
    mysqli_close($mysqli);
 ?>