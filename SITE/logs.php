<?php
//LOGIN
//ACHO QUE é ISSO...
$error=''; 
if(isset($_POST['submit'])){
 if(empty($_POST['email']) || empty($_POST['senha'])){
 $error = "Usuário ou senha errado";
 }
 else
 {
 //Defina uma variavel e muda o que esta em ["nome no bd"];
 $usuario = $_POST['email'];
 $senha = $_POST['senha'];
 //Deixa o nome do host normal...Root tambem...Se você estiver na escola....Coloca "root" nos "" sem nada...
 $conn = mysqli_connect("127.0.0.1", "root", "root");
 //Entre os "coloca o nome do BD"
 $db = mysqli_select_db($conn, "MaBiBookz");
 
 //coloque entre FROM e Where o nome da tabela do bd e depois de WHERE coloca o que você colocou nas string...

 $query = mysqli_query($conn, "SELECT * FROM usuario WHERE senha='$senha' AND email='$usuario'");
 
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: perfil.php"); // coloca a pagina que voces quiserem(recomendo a de login, pra ficar mais fácil)
 }
 else
 {
 $error = "Usuario ou senha errado";
 }
 mysqli_close($conn); // ISSO AQUI É UM tipo de return...Parando o codigo....(return não para)
 }
}
 //TNX Gabriel Silva Solza

?>