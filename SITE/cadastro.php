<<<<<<< HEAD
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cadastro realizado com sucesso!</title>
</head>
<body>
<?php
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome= $_POST ["nome"];//atribuição do campo "nome" vindo do formulário para variavel
$email= $_POST ["email"];//atribuição do campo "email" vindo do formulário para variavel
$ddd= $_POST ["ddd"];//atribuição do campo "ddd" vindo do formulário para variavel
$tel= $_POST ["telefone"];//atribuição do campo "telefone" vindo do formulário para variavel
$endereco= $_POST ["endereco"];//atribuição do campo "endereco" vindo do formulário para variavel
$cidade= $_POST ["cidade"];//atribuição do campo "cidade" vindo do formulário para variavel
$estado= $_POST ["estado"];//atribuição do campo "estado" vindo do formulário para variavel
$bairro = $_POST ["bairro"];//atribuição do campo "bairro" vindo do formulário para variavel
$pais= $_POST ["pais"];//atribuição do campo "pais" vindo do formulário para variavel
$login= $_POST ["login"];//atribuição do campo "login" vindo do formulário para variavel
$senha= $_POST ["senha"];//atribuição do campo "senha" vindo do formulário para variavel

 
//Gravando no banco de dados ! conectando com o localhost - mysql
$conexao = postgres_connect("localhost","root"); //localhost é onde esta o banco de dados.
if (!$conexao)
die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".postgres_error());
 
//conectando com a tabela do banco de dados
$banco = postgres_select_db("usuario",$conexao); //nome da tabela que deseja que seja inserida os dados cadastrais
if (!$banco)
die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".postgres_error());
 
 
//Query que realiza a inserção dos dados no banco de dados na tabela indicada acima
$query = "INSERT INTO `instituição` ( `nome` , `email` , `ddd` , `telefone` , `endereço` , `cidade` , `estado` , `bairro` , `país` , `login` , `senha` , `id` )
VALUES ('$nome', '$email', '$ddd', '$tel', '$endereco', '$cidade', '$estado', '$bairro', '$pais', '$login', '$senha', '')";
postgres_query($query,$conexao);
########## • Explicação da query • ##########
#$query = nome da variavel que decidi#
#utilizar para realizar a operação.#
#############################################
#clientes = nome da tabela que será salvo#
#os dados do cadastro do cliente#
#############################################
#nome, email, sexo, ddd, telefone,#
#endereço, cidade, estado, bairro, país,#
#login, senha, news, id.#
##
#São apenas os nomes dos campos que #
#constam na tabela clientes.#
#############################
#VALUES = indica que serão inseridos os#
#seguintes valores.#
#############################################
#$nome, $email, $sexo, $ddd, $telefone,#
#$endereço, $cidade, $estado, $bairro, #
#$país, $login, $senha, $news, $id.#
#############################
#São apenas as variaveis a qual eu#
#atribui os valores digitados no formulá-#
#rio.#
#############################################
echo "Seu cadastro foi realizado com sucesso!Agradecemos a atenção.";
//mensagem que é escrita quando os dados são inseridos normalmente.
?>
</body>
</html>
=======
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
	$nome = $_POST['nome_compl'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$logradouro = $_POST['logradouro'];
	$DDD = $_POST['ddd'];
	$senha = $_POST['senha'];

	

	
	//coloquem o nome da tabela que quer cadastrar depois de usuario e depois os nomes das strings e depois de VALUES coloquem as strings criadas
	$sql = "INSERT INTO usuario (nome_compl, email, senha, telefone, ddd, logradouro ) VALUES ('$nome', '$email', '$senha', '$telefone', '$DDD', '$logradouro')";
	
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

?>
>>>>>>> 13d940e665164d45bf6ac62124049729f7fad41d
