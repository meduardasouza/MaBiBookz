<?php
   header("Content-Type: text/html; charset=ISO-8859-1",true);
   require_once("functions.php");
   seguranca();
   	$username = $_SESSION['user']['username'];
   	$nome = $_SESSION['user']['nome'];
   	$email = $_SESSION['user']['email'];
	$cidade = $_SESSION['user']['cidade'];
	$estado = $_SESSION['user']['estado'];
	$bairro = $_SESSION['user']['bairro'];
	$telefone = $_SESSION['user']['telefone'];
	$email = $_SESSION['user']['email'];
	$DDD = $_SESSION['user']['ddd'];

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
		<title> Perfil </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
      <?php include ("cabeçalhopi.php") ?>
			<section>
							<br>
							<br>
							<div class="circle">

								<img src="images/perfil.jpg" width="150"  height="150">
							</div>
							<a href="edita.php" > editar dados </a>
							<br>
			<h2><?php echo $nome ?> </h2>
	<div id="tabelinha">
		<table width="625" border="0">
		    <tr>
		      <td width="69">Local:</td>
		      <td><?php echo $cidade ?><br> <?php echo $estado ?> </br> <?php echo $bairro ?></td>
		    </tr>
		    <tr>
		      <td width="100">Dados para contato:</td>
		      <td> Telefone: (<?php echo $DDD ?> ) <?php echo $telefone ?> <br> Email: <?php echo $email ?> </td>
		    </tr>
		</table>
	</div>

	<h3> Lista de Desejos </h3>
	<h5> <a href="cadastrolivro.php" > Clique para cadastrar um livro novo. </a> </h5>
		<table width="625" border="0">

			<tr>
		      <td width="69">Livro:</td>
		      <td> Rua xxxxxxx. </td>
		    <tr>
		      <td width="69">Dom Casmurro</td>
		      <td> <a href="doardc.php" > Clique para doar. </a> </td>
		    </tr>
		    <tr>
		      <td width="69"> A Garota no Trem</td>
		      <td> <a href="doarag.php" > Clique para doar. </a> </td>

		    </tr>
		</table>
	<h6> <a href="rastreio.php" > Clique aqui para saber onde estão seus livros cadastrados. </a> </h6>

			</section>

	        <?php include ("rodape.php") ?>
      		<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>