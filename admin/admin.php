<?php
//se nao existe sesao ele começa
if(!isset($_SESSION)) {
    session_start();
}
//se nao tem id nao ta logado
if(!isset($_SESSION['id'])) {
    header("Location: ../index.php");
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"index.php\">Entrar</a></p>");
}
?>


<?php 
//verifica se existe id
if(isset($_SESSION['id'])) {

//se existe verifica se é o admin
if (($_SESSION['id'] != '1')){
    header("Location: ../index.php");
    }
}
?>






<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>ADMIN</title>
</head>
<body>
    

<div class="main"><!-- começo do menu do admin  -->
    <div class="center">
        <div class="card">

            <h1>Oque deseja fazer?</h1> </br>

           <a href="Users/index.php">
            <div class="acoes">
              USUARIOS </a> 
            </div>

            <a href="SaveBooks/index.php">
            <div class="acoes">
            CADASTRAR LIVRO</a> 
            </div> 

            <a href="../LOGIN/logout.php">
            <div class="acoes">
                SAIR</a>

            
        </div>
    </div>
</div>
    </div><!--  fim menu admin  -->

</body>
</html>





