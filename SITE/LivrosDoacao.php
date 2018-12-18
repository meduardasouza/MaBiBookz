<?php  
	$server = "localhost";
	$usuario = "root";
	$senha = "root";
	$banco = "MaBiBookz";
		
	$conn = new mysqli($server, $usuario, $senha, $banco);

	if ($conn->connect_error) {
		die("Erro na conexão: " . $conn->connect_error);
	}
?>

<?php  
	$sql = "SELECT livro, instituicao, logradoura, telefone FROM doacao";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
			
		while($row = $result->fetch_assoc()) {
			echo $row["livro"] . " -------- " . $row["instituicao"] . " -------- " . $row["lograudora"] . " -------- " . $row["telefone"]; 
			echo "</br>";     
		}
	} else {
		echo "Nada encontrado";
	}
	
	$conn->close();
?>