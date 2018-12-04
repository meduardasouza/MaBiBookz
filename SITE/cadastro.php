<?php

	$con = mysqli_connect('127.0.0.1','root', 'root');

	if(!$con)
	{
		echo 'deu ruim';
	}

	if(!mysqli_select_db($con, 'MaBiBookz'))
	{
		echo 'BD não selecionado';
	}
	//Criem strings e coloquem o mesmo nome do BD
	$senha = $_POST['senha'];
	$nome = $_POST['nome_compl'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];	
	//$imagem = $_POST['imagem'];
	$DDD = $_POST['ddd'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$bairro = $_POST['bairro'];
	$username = $_POST['username'];

	
	
	//coloquem o nome da tabela que quer cadastrar depois de usuario e depois os nomes das strings e depois de VALUES coloquem as strings criadas
	$sql = "INSERT INTO usuario (nome_compl, email, senha, telefone, ddd, cidade, estado, bairro, username) VALUES ('$nome', '$email', '$senha', '$telefone', '$DDD', '$cidade', '$estado', '$bairro', '$username')";
	
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