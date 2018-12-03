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
	$nome_insti = $_POST['nome_insti'];
	$nome_livro = $_POST['nome_livro'];
	$genero = $_POST['genero'];
	$email = $_POST['email'];
	$DDD = $_POST['ddd'];
	$telefone = $_POST['telefone'];

	//coloquem o nome da tabela que quer cadastrar depois de usuario e depois os nomes das strings e depois de VALUES coloquem as strings criadas
	$sql = "INSERT INTO livros (nome_insti, nome_livro, genero, email, ddd, telefone) VALUES ('$nome_insti', '$nome_livro', '$genero', '$email', '$DDD', '$telefone')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'não cadastrado';
	}
	else 
	{
		echo 'Cadastrado com sucesso'; 
		header("Location: livrocad.php");// A pagina que vocês querem ir(recomendo que seja a de LOGIN)
	}
	
	//header("refresh:;2 url=inicio.html");

	//By volei y google
	
?>