<?php
    header("Content-Type: text/html; charset=ISO-8859-1",true);
    require_once("functions.php");
    seguranca();
    $username = $_SESSION['user']['username'];
    $nome = $_SESSION['user']['nome'];
    $email = $_SESSION['user']['email'];
    
 ?>






<!DOCTYPE html>
<html>
    	<head>
		<title>Editar Dados</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>

    <body>
      <?php include ("cabeçalhosc.php") ?>
        <form action="editaser.php" method="post">

            Nome:<input type="text" name="nome" >
            Senha:<input type="text" name="senha" ><br>
            Email:<input type="text" name="email" ><br>
            Telefone:<input type="text" name="telefone" ><br>
            DDD:<input type="text" name="ddd" ><br>
            Estado:<input type="text" name="estado" ><br>
            Bairro:<input type="text" name="bairro" ><br>
            Cidade:<input type="text" name="cidade" ><br>

            <input type="submit" name="update" value="Update Data">

         </form>

    </body>


</html>