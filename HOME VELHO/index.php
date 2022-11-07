<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="LOGIN">

<header>
<div class="cointer-logo">
    <div class="logo-imagem"></div>
    <div class="logo-texto">

    <?php


if(isset($_SESSION['id'])) {
    
        echo $_SESSION['nome']; 
}else{
    
    $_SESSION['msg'] = '<a href="LOGIN/index.php">Entrar</a>';
    echo $_SESSION['msg']; 
}
    ?>

        </div>
</div>

<div class="menu">
    <ul>
        <li><a href="#">sobre</a></li>
        <li><a href="#">contato</a></li>
        <li><a href="#">PRODOTOS</a></li>
        <li><a href="LOGIN/logout.php">Sair</a></li>
    </ul>
</header>



    
</body>
</html>