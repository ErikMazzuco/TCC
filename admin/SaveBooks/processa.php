<?php
session_start();
include_once("../../login/conexao.php");

$titulo = $_POST ['titulo'];
$autor = $_POST ['autor'];
$ano = $_POST ['ano'];
$sobre = $_POST ['sobre'];


$result = "INSERT INTO livros (titulo,autor,ano,sobre,datain) VALUES ('$titulo','$autor','$ano','$sobre',NOW())";

$query = mysqli_query ($mysqli,$result);


if(mysqli_insert_id($mysqli)){

    $_SESSION['book'] = "<p style='color:green;'>Livro cadastrado com sucesso</p>";
    
    //redireciona para o arquivo index
    header("Location: index.php");
    
    }else{
    
    $_SESSION['book'] = "<p style='color:red;'>Livro não foi cadastrado com sucesso</p>";
    
    header("Location: iindex.php");
    
    }

 ?>