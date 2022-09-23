<?php
//inicia a sessão da página
session_start();
include_once("../conexao.php");


$nome = $_POST ['nome'];
$email = $_POST ['email'];
$senha = $_POST ['senha'];
$result = "INSERT INTO usuarios1 (nome,email,Senha) VALUES ('$nome','$email','$senha')";



$query = mysqli_query ($mysqli,$result);



//se inserir com sucesso
//apresenta msg caso der certo

if(mysqli_insert_id($mysqli)){

    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
    
    //redireciona para o arquivo index
    header("Location: index.php");
    
    }else{
    
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
    
    header("Location: index.php");
    
    }
    
    mysqli_close($mysqli);
 ?>