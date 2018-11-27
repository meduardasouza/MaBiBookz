<!DOCTYPE HTML>
<!--
	Introspect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
			<header id="header">
				<div class="inner">
					<a href="home.php" class="logo">MaBiBookz</a>
					<nav id="nav">
						<a href="home.php">Página Inicial</a>
			            <a href="perfil.php">Perfil</a>
			            <a href="info.php"> Nosso Objetivo</a>
			            <a href="index.php?act=logout">Encerrar Sessão</a>
					</nav>


<!--index.php -->
<?

if($_GET["act"]=="logout"){
session_destroy();
header("location: index.php");
exit;
}

?>
				</div>
			</header>
</html>