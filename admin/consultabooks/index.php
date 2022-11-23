<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    header("Location: ../index.php");
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"index.php\">Entrar</a></p>");
}
?>


<?php 
if(isset($_SESSION['id'])) {


if (($_SESSION['id'] != '1')){
    header("Location: ../index.php");
    }
}
?>


<?php
include_once('../../LOGIN/conexao.php');
$sql = "SELECT * FROM livros ORDER BY ID DESC";
$result = $mysqli->query($sql);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>USUARIOS</title>
</head>
<body>
<div class="users">

    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">titulo</th>
        <th scope="col">autor</th>
        <th scope="col">ano</th>
        <th scope="col">sobre</th>
        <th scope="col">datain</th>
        </tr>
    </thead>
    <tbody>
            <?php
            while($user_data = mysqli_fetch_assoc($result))
            {
                echo"<tr>";
                echo"<td>".$user_data['ID']."</td>";
                echo"<td>".$user_data['titulo']."</td>";
                echo"<td>".$user_data['autor']."</td>";
                echo"<td>".$user_data['ano']."</td>";
                echo"<td>".$user_data['sobre']."</td>";
                echo"<td>".$user_data['datain']."</td>";
            }




            ?>
    </tbody>
</table>

</div>



</body>
</html>