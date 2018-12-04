<?php
   header("Content-Type: text/html; charset=ISO-8859-1",true);
   require_once("functions.php");
   seguranca();
   $username = $_SESSION['user']['username'];
   $nome = $_SESSION['user']['nome'];
   $email = $_SESSION['user']['email'];
   $cpf = $_SESSION['user']['cpf'];
    $nome_livro = $_SESSION['livro']['nome_livro'];
    $genero = $_SESSION['livro']['genero'];
    $DDD = $_SESSION['livro']['ddd'];
    $telefone = $_SESSION['livro']['telefone'];


   //ISSO DEVE ESTAR NO INICIO DE CADA PÁGINA QUE O USUÁRIO USAR APÓS O LOGIN



   $sql = "SELECT "
?>

<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
</head>
<body>
  <h1><?php echo $nome?></h1><!-- ISSO AQUI É PARA FAZER APARECER-->
</body>
</html>