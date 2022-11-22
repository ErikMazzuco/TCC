<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width">
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<title>New Book</title>
</head>

    <body>
        <div class=center>

                <form class="card" method="post" action="processa.php">

                    <div class="textfield">
                    <label>Titulo: </label>
                    <input type="text" id="titulo" name="titulo" placeholder="insira um titulo">
                    </div>

                    <div class="textfield">
                    <label>Autor:</label>
                    <input type="text" id="autor" name="autor" placeholder="insira o nome do autor">
                    </div>

                    <div class="textfield">
                    <label>ano:</label>
                    <input type="date" id="ano" name="ano" placeholder="insira o ano de lançamento">
                    </div>

                    <div class="textfield">
                    <label>quantidade:</label>
                    <input type="int" id="estoque" name="estoque" placeholder="quantos livros">
                    </div>

                    <div class="textfield">
                    <label>descrição:</label>
                    <input type="text" id="sobre" name="sobre" placeholder="descrição do estado do livros">
                    </div>
                    <input type="submit" value="Adicionar livro" class="submit">
                </form>
        </div>        
    </body>

</html>


<!-- verifa se é admin -->
<?php 
if(isset($_SESSION['id'])) {


if (($_SESSION['id'] != '1')){
    header("Location: ../index.php");
    }
}
?>
