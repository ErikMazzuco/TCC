

<?php

include_once("../../login/conexao.php");

if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    $nome = $_POST ['nome'];
    $email = $_POST ['email'];
    $senha = $_POST ['senha'];
    

    $sqlUpdate ="UPDATE usuarios SET nome='$nome',email='$email',senha='$senha'
    WHERE id= $id";

    $result = $mysqli->query($sqlUpdate);
    header('location: index.php');
}

?>

