<?php
//inicia a sessão
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width">
<meta charset="utf-8">
<link rel="stylesheet" href="styleedit.css">
<title> EDITAR: </title>
</head>
<body>

<!--

//se existir a variavel imprime a variavel global

if(isset($_SESSION['msg'])){
echo $_SESSION['msg'];
unset($_SESSION['msg']); //destroi a variavel global
}

-->


<?php

if(!empty($_GET['id']))
{
include_once("../../login/conexao.php");



$id = $_GET['id'];
$sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

$result = $mysqli->query($sqlSelect);
print_r($result);
if($result->num_rows > 0)
{
    while($user_data = mysqli_fetch_assoc($result))
    {
    $id =$user_data ['id'];
    $nome =$user_data ['nome'];
    $email =$user_data ['email'];
    $senha =$user_data ['senha'];
    
    }
}
else
{

    header('location:index.php');
}



}

?>




<div class="main">
    <div class="center">

        <form  method="post" class="card-cadastro" action="saveedit.php">
            <h1>Editar Conta</h1>

            <div class="textfield"> 
            <label>Nome: </label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" value="<?php echo $nome ?>" required><br><br>
            </div>

            <div class="textfield"> 
            <label>E-mail: </label>
            <input type="email" id="email" name="email" placeholder="Digite o seu e-mail" value="<?php echo $email ?>" required><br><br>
            </div>
            <input type="hidden" name="id" value="<?php echo $id ?>">

            <div class="textfield"> 
            <label>SENHA: </label>
            <input type="password" id="senha" name="senha" placeholder="Digite uma senha" value="<?php echo $senha ?>" required><br><br>
            </div>

            <input type="submit" name="update" id="update" class="btn-cadastro" value="Alterar Conta">


            
        </form>
    </div>
</div>
</body>
</html>