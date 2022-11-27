<?php
session_start();


include_once("../LOGIN/conexao.php");


$id = $_GET['id'];
$sqlSelect = "SELECT * FROM livros WHERE id=$id";

$result = $mysqli->query($sqlSelect);

if($result->num_rows > 0)
{
    while($user_data = mysqli_fetch_assoc($result))
    {
    $titulo =$user_data ['titulo'];
    $autor =$user_data ['autor'];
    $ano =$user_data ['ano'];
    $sobre =$user_data ['sobre'];
    }


echo $id , "</br>";
echo $titulo, "</br>";
echo $autor, "</br>";
echo $ano, "</br>";
echo $sobre, "</br>";
   
}
else
{

    echo "<h1><fontcolor='RED'>ALGO DEU ERRADO</h1>";
    
    //header('location:index.php');
}

?>