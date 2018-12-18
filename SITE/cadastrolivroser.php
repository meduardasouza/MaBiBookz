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
	$nome_livro = $_POST['nome_livro'];
	$genero = $_POST['genero'];
	$autor = $_POST['autor'];
	$editora = $_POST['editora'];	
	$isbn = $_POST['isbn'];
	$sinopse = $_POST['sinopse'];



	
	
	//coloquem o nome da tabela que quer cadastrar depois de usuario e depois os nomes das strings e depois de VALUES coloquem as strings criadas
	$sql = "INSERT INTO livros (nome_livro, genero, autor, editora, isbn, sinopse) VALUES ('$nome_livro', '$genero', '$autor', '$editora', '$isbn', '$sinopse')";
	
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