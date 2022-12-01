
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
    $sinopese =$user_data ['sinopese'];
    }
}
else
{
    echo "<center><h1><font color='RED'>ALGO DEU ERRADO</h1></font>";
    //header('location:index.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $titulo ?></title>
</head>
<body>
    

<?php





echo"  <div class='main-login'>
    <div class='right-login'>
            <div class='card-login'>";



//echo $id , "</br>";
echo"<font color=\"red\">";
echo $titulo, "</font></br>";
echo $autor, "</br><center>";
echo $ano, "</br>";

   



echo" </div>  

<div class='card2'>

 $sinopese </br>

</div>

</div>
</div>";



?>
</body>
</html>