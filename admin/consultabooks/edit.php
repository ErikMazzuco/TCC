<?php

if(!empty($_GET['id']))
{
include_once("../../login/conexao.php");



$id = $_GET['id'];
$sqlSelect = "SELECT * FROM livros WHERE id=$id";

$result = $mysqli->query($sqlSelect);
//print_r($result);
if($result->num_rows > 0)
{
    while($user_data = mysqli_fetch_assoc($result))
    {
    $titulo =$user_data ['titulo'];
    $autor =$user_data ['autor'];
    $ano =$user_data ['ano'];
    $sobre =$user_data ['sobre'];
    }
}
else
{

    header('location:index.php');
}



}

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width">
<meta charset="utf-8">
<link rel="stylesheet" href="stylefromedit.css">
<title>Edit Book</title>
</head>
    <body>
        <div class=center>

                <form class="card" method="post" action="saveedit.php">

                    <div class="textfield">
                    <label>Titulo: </label>
                    <input type="text" id="titulo" name="titulo" placeholder="insira um titulo" value="<?php echo $titulo ?>" required>
                    </div>

                    <div class="textfield">
                    <label>Autor:</label>
                    <input type="text" id="autor" name="autor" placeholder="insira o nome do autor" value="<?php echo $autor ?>" required>
                    </div>

                    <div class="textfield">
                    <label>ano:</label>
                    <input type="date" id="ano" name="ano" placeholder="insira o ano de lançamento" value="<?php echo $ano ?>" required>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id ?>">

                    <div class="textfield">
                    <label>descrição:</label>
                    <input type="text" id="sobre" name="sobre" placeholder="descrição do estado do livros" value="<?php echo $sobre ?>" required>
                    </div>
                    <input type="submit" value="Editar livro" name="update" id="update" class="submit">


</form>

        </div>        
    </body>

</html>



