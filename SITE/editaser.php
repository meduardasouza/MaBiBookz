<?php

 

 if(isset($_POST['update']))
 {
     
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $databaseName = "MaBiBookz";
    
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
  
    
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];   
    //$imagem = $_POST['imagem'];
    $DDD = $_POST['ddd'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $bairro = $_POST['bairro'];
    $username = $_POST['username'];
            
    
    $query = "UPDATE `usuario` SET `senha`='".$senha."',`nome`='".$nome."',`email`='".$email."',`telefone`='".$telefone."', `ddd`='".$DDD."', `estado`='".$estado."', `bairro`='".$bairro."', `cidade`='".$cidade."'  WHERE `username` = '".$username."'";
    
    $result = mysqli_query($connect, $query);
    
    if($result)
    {
        echo 'Data Updated';
    }else{
        echo 'Data Not Updated';
    }
    mysqli_close($connect);
 }

 ?> 