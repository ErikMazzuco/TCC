<?php
session_start();
if(empty($_GET['id']))
{

header('location: ../index.php');

}else if(!empty($_GET['id']))
{

include_once("../LOGIN/conexao.php");



$id = $_GET['id'];
$sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

$result = $mysqli->query($sqlSelect);

if($result->num_rows > 0)
{
    while($user_data = mysqli_fetch_assoc($result))
    {
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    



<div class="main">
    <div class="center">

        <form  method="post" class="card-cadastro" action="edit.php">
            <h1>Editar Conta</h1>

            <div class="textfield"> 
            <label>Nome: </label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" value="<?php echo $nome ?>" required><br><br>
            </div>

            <div class="textfield"> 
            <label>E-mail: </label>
            <input type="email" id="email" name="email" placeholder="Digite o seu e-mail" value="<?php echo $email ?>" required><br><br>
            </div>

            <div class="textfield"> 
            <label>Senha: </label>
            <input type="password" id="senha" name="senha" placeholder="Digite uma senha" value="<?php echo $senha ?>" required><br><br>
            </div>

            <input type="submit" class="btn-cadastro" value="SALVAR">


        </form>
    </div>
</div>

</body>
</html>