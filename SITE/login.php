<!DOCTYPE HTML>
<!--
	Introspect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

      <?php include ("cabeçalhologin.html") ?>


		<!-- Main -->
			<section id="main">
				<div class="inner">
					<header class="major special">
						<!-- Form -->
						<section>
							<h2>Login</h2>
						</section>
<!-- Footer --><form method="POST" action="perfil.php">
					<label>Login:</label><input type="text" name="login" id="login"><br>
					<label>Senha:</label><input type="password" name="senha" id="senha"><br>
					<input type="submit" value="entrar" id="entrar" name="entrar"><br>
					<a href="cadastrousu.php">Ainda não tem cadastro? Cadastre-se aqui!</a>
				</form>


      <?php include ("rodape.html") ?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>