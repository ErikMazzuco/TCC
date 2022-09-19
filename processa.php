<?php
//inicia a sessão da página
session_start();
include_once("conexao.php");
//filter_input recebe os dados do formulario; limpar os dados que 
//vem do formulario

$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);

$result_usuario = "INSERT INTO usuarios (NOME,EMAIL,CREATED) VALUES ('$nome', '$email', NOW())";
$result_usuario = mysqli_query($con, $result_usuario);
//se inserir com sucesso
//apresenta msg caso der certo
if(mysqli_insert_id($con)){

    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
    
    //redireciona para o arquivo index
    header("Location: index.php");
    
    }else{
    
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
    
    header("Location: index.php");
    
    }