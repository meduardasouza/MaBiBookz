<?php
    header("Content-Type: text/html; charset=ISO-8859-1",true);
    require_once("functions.php");
    seguranca();
    $username = $_SESSION['user']['username'];
    $nome = $_SESSION['user']['nome'];
    $email = $_SESSION['user']['email'];
    
 ?>






<!DOCTYPE html>
<html>
    <head>
        <title> TESTE DE EDIÇÃO </title>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="css/estilinho.css">

    </head>

    <body>

        <form action="editaser.php" method="post">

            Nome:<input type="text" name="nome" ><br><br>

            Senha:<input type="text" name="senha" ><br><br>

            Email:<input type="text" name="email" ><br><br>

            Telefone:<input type="text" name="telefone" ><br><br>

            DDD:<input type="text" name="ddd" ><br><br>

            Estado:<input type="text" name="estado" ><br><br>

            Bairro:<input type="text" name="bairro" ><br><br>

            Cidade:<input type="text" name="cidade" ><br><br>

            <input type="submit" name="update" value="Update Data">

 <td align="left">
    <select name="username"> 
    <option><?php echo $username?></option> 

    </select>
   </td>

        </form>

    </body>


</html>