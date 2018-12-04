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
?>

<!DOCTYPE HTML>
<!--
	Introspect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title> Livro Cadastrado </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
      <?php include ("cabeçalhopi.php") ?>
			<section>
			<h2><?php echo $nome ?> </h2>
				<h3><?php echo $nome_livro ?> </h3>
	<div id="tabelinha">
		<table width="625" border="0">
		    <tr>
		      <td width="69">Local:</td>
		      <td> Rua xxxxxxx. <br> RJ </br> Quissamã - Barra do Furado 70 </td>
		    </tr>
		    <tr>
		      <td width="69">Dados para contato:</td>
		      <td> Telefone: (xx) xxxx-xxxx <br> Email: abcdefgh@semmerchan.com </td>
		    </tr>
		</table>
	</div>
	<h6> <a href="rastreio.php" > Clique aqui para saber onde estão seus livros cadastrados. </a> </h6>

			</section>

	        <?php include ("rodape.php") ?>
      		<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>