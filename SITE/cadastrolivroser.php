<?php

	$con = mysqli_connect('127.0.0.1','root', 'root');
	//Coloca os coisas ali...No meio de '' coloquem a "root"...Isso se vocês estiverem no pc da escola
	if(!$con)
	{
		echo 'deu ruim';
	}
	//Coloquem o nome do BD que esta entre "test";
	if(!mysqli_select_db($con, 'MaBiBookz'))
	{
		echo 'BD não selecionado';
	}
	//Criem strings e coloquem o mesmo nome do BD
	$nome = $_POST['nome_compl'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$DDD = $_POST['ddd'];
	$senha = $_POST['senha'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$bairro = $_POST['bairro'];
	$país = $_POST['país'];
	//$imagem = $_POST['imagem'];

	
	//coloquem o nome da tabela que quer cadastrar depois de usuario e depois os nomes das strings e depois de VALUES coloquem as strings criadas
	$sql = "INSERT INTO usuario (nome_compl, email, senha, telefone, ddd, cidade, estado, bairro, país, imagem) VALUES ('$nome', '$email', '$senha', '$telefone', '$DDD', '$cidade', '$estado', '$bairro', '$país')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'não cadastrado';
	}
	else 
	{
		echo 'Cadastrado com sucesso'; 
		header("Location: login.php");// A pagina que vocês querem ir(recomendo que seja a de LOGIN)
	}
	
	//header("refresh:;2 url=inicio.html");

	//By volei y google
	
?>