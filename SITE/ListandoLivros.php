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

		$sql = "SELECT autor, editora, genero, nome_livro, sinopse FROM livros";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			echo $row["autor"] . "___________" . $row["editora"] . "___________" . $row["genero"] . "___________" . $row["nome_livro"] . "___________" . $row["sinopse"];
			echo "</br>";
			echo "</br>";
		}
	} else {
		echo "Nenhum livro cadastrado";
	}
	$conn->close();
?>