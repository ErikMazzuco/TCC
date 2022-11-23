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
    <title>MY BOOKS</title>
</head>



<body>
<header>

<!-- Envia para pagina de admin -->
<?php 
if(isset($_SESSION['id'])) {
if (($_SESSION['id'] == '1')){
    header("Location: admin/admin.php");
    }
}
?>

<div class="menu">

    <!-- usuario comum mostra se logado-->
    <?php
    if(isset($_SESSION['id'])) {

        
        $_SESSION['ola'] = '  <ul><li><a><b>Olá,</b>  ';
        echo $_SESSION['ola']; 
            echo $_SESSION['nome']; 
            $_SESSION['fim'] = '</ul></li>';
            echo $_SESSION['fim'];


        $_SESSION['sair'] = '<ul><li><a href="LOGIN/logout.php">Sair</a></li></ul>';
        echo $_SESSION['sair']; 


    }else{
        $_SESSION['enter'] = '<ul><li>';
        echo $_SESSION['enter'];
        $_SESSION['entrar'] = '<a href="LOGIN/index.php">Entrar</a>';
        echo $_SESSION['entrar']; 
    }
        ?>
        <?php
include_once('LOGIN/conexao.php');
$sql = "SELECT * FROM livros ORDER BY ID DESC";
$result = $mysqli->query($sql);


?>

</div>
</header>
<div class="center">
<div class="main">
         <?php
            while($user_data = mysqli_fetch_assoc($result))
            {

                echo "<div class=\"card\">";
                echo"<thead class=\"text\"><tr><th><font color=\"red\">TITULO: </font></th></tr>";
                echo"<td><font color=\"white\">".$user_data['titulo']."</td></br>";


                echo"<thead><tr><th><font color=\"red\">AUTOR: </font></th></tr>";
                echo"<td>".$user_data['autor']."</td></br>";


                echo"<thead><tr><th><font color=\"red\">ANO: </font></th></tr>";
                echo"<td>".$user_data['ano']."</td></br>";


                echo"<thead><tr><th><font color=\"red\">SOBRE: </font></th></tr>";      
                echo"<td>".$user_data['sobre']."</td></br>";

                echo"<thead><tr><th><font color=\"red\">DATA: </font></th></tr>";
                echo"<td>".$user_data['datain']."</td></br></br> </div>";

                
            }
        ?>
    </tbody>



</table>

</div>
        </div>



</body>
</html>