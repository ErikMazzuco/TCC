<?php
session_start();

?>
<!-- Envia para pagina de admin -->
<?php 
if(isset($_SESSION['id'])) {
if (($_SESSION['id'] == '1')){
    header("Location: admin/admin.php");
    }
}
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


<nav>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
          
        </div>
        <ul class="nav-list">
          <!--<li><a href="#">Início</a></li>
          <li><a href="#">Sobre</a></li>
          <li><a href="#">Projetos</a></li>
          <li><a href="#">Contato</a></li>-->



  <!--<div class="menu">

   usuario comum mostra se logado-->
    <?php
    if(isset($_SESSION['id'])) {


        echo "<li><a href='perfil/index.php?id=$_SESSION[id]'>";
        //$_SESSION['ola'] = '  <ul><li><b>Olá,</b>  ';
        //echo $_SESSION['ola']; 
            echo $_SESSION['nome']; 
            echo "</a></li>";

            //$_SESSION['fim'] = '</li>';
           // echo $_SESSION['fim'];


        $_SESSION['sair'] = '<li><a href="LOGIN/logout.php">Sair</a></li>';
        echo $_SESSION['sair']; 


    }else{
        $_SESSION['enter'] = '<ul><li>';
        echo $_SESSION['enter'];
        $_SESSION['entrar'] = '<a href="LOGIN/index.php">Entrar</a>';
        echo $_SESSION['entrar']; 
    }
        ?>
    </ul>
      </nav>

        <?php
include_once('LOGIN/conexao.php');
$sql = "SELECT * FROM livros ORDER BY ID DESC";
$result = $mysqli->query($sql);

//$id = $_GET['id'];
?>

</div>
</header>

<div class="center">
<div class="main">

         <?php
            while($user_data = mysqli_fetch_assoc($result))
            {

                echo "<a class=\"card\" href='verbook/index.php?id=$user_data[id]'>";
             //   echo"<p><thead class=\"text\"><tr><th><font color=\"red\">TITULO: </font></th></tr>";
                echo"<p><td><font color=\"red\"><b>".$user_data['titulo']."</td></br></font></p></b>";


              //  echo"<p><thead><tr><th><font color=\"red\">AUTOR: </font></th></tr>";
                echo"<p><td><font color=\"white\">".$user_data['autor']."</td></br></p>";


             //   echo"<p><thead><tr><th><font color=\"red\">ANO: </font></th></tr>";
                echo"<p><td>".$user_data['ano']."</td></br></p>";


              //  echo"<p><thead><tr><th><font color=\"red\">SOBRE: </font></th></tr>";      
                echo"<p><td>".$user_data['sobre']."</td></br></p>";

               // echo"<p><thead><tr><th><font color=\"red\">DATA: </font></th></tr>";
               // echo"<td>".$user_data['datain']."</td></br></br></p> ";

                echo "</a></font>";
            }
        ?>
    </tbody>



</table>

</div>
        </div>
        <script src="mobile-navbar.js"></script>
</body>
</html>