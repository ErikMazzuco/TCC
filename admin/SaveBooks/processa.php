<?php
session_start();
include_once("../login/conexao.php");

$titulo = $_POST ['titulo'];
$autor = $_POST ['autor'];
$ano = $_POST ['ano'];
$estoque = $_POST ['estoque'];
$sobre = $_POST ['sobre'];


$result = "INSERT INTO Livros (titulo,autor,ano,estoque,sobre,datain) VALUES ('$titulo','$autor','$ano','$estoque','$sobre,'now()')";

$query = mysqli_query ($mysqli,$result);

//se inserir com sucesso
//apresenta msg caso der certo

if(mysqli_insert_id($mysqli)){

    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
    
    //redireciona para o arquivo index

    header("index.php");
    }else{
    
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
    

    header("index.php");
    }
    
    mysqli_close($mysqli);
 ?>