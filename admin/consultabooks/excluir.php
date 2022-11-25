<?php
include_once("../../login/conexao.php");

if(!empty($_GET['id']))
{


$id = $_GET['id'];
$sqlSelect = "SELECT * FROM livros WHERE id=$id";

$result = $mysqli->query($sqlSelect);

if($result->num_rows > 0)
{
    $sqlDelete ="DELETE FROM livros WHERE id=$id";
    $result = $mysqli->query($sqlDelete);

}
}
header('Location: index.php')

?>