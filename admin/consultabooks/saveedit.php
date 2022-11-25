

<?php

include_once("../../login/conexao.php");

if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    $titulo = $_POST ['titulo'];
    $autor = $_POST ['autor'];
    $ano = $_POST ['ano'];
    $sobre = $_POST ['sobre'];

    $sqlUpdate ="UPDATE livros SET titulo='$titulo',autor='$autor',ano='$ano',sobre='$sobre'
    WHERE id= $id";

    $result = $mysqli->query($sqlUpdate);
    header('location: index.php');
}

?>

