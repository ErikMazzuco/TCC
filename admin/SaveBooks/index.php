




<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width">
<meta charset="utf-8">
<link rel="stylesheet" href="style_C.css">
<title> Cadastrar: </title>



</head>

    <body>

<center>
        <form class="card" method="post" action="processa.php">


            <label>Iitulo: </label>
            <input type="text" id="titulo" name="titulo" placeholder="insira um titulo"><br>
<br>
            <label>Autor: </label>
            <input type="text" id="autor" name="autor" placeholder="insira o nome do autor"><br>
<br>
            <label>ano: </label>
            <input type="date" id="ano" name="ano" placeholder="insira o ano de lançamento"><br>
<br>
            <label>quantidade: </label>
            <input type="int" id="estoque" name="estoque" placeholder="quantos livros adicionar?"><br>
<br>
            <label>descrição: </label>
            <input type="text" id="sobre" name="sobre" placeholder="descrição do estado do livros"><br>
            
<br>

            <input type="submit" value="Cadastrar-se" class="submit">

</center>

        </form>

    </body>

</html>




<?php 
if(isset($_SESSION['id'])) {


if (($_SESSION['id'] != '1')){
    header("Location: ../index.php");
    }
}
?>
