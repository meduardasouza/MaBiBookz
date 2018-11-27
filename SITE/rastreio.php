<?php
   header("Content-Type: text/html; charset=ISO-8859-1",true);
   require_once("functions.php");
   seguranca();
   $username = $_SESSION['user']['username'];
   $nome = $_SESSION['user']['nome'];
   $email = $_SESSION['user']['email'];

   //ISSO DEVE ESTAR NO INICIO DE CADA PÁGINA QUE O USUÁRIO USAR APÓS O LOGIN
?>

<!DOCTYPE HTML>
<!--
    Introspect by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
        <title> Rastreio </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body>

        <!-- Header -->
  <?php include ("cabeçalhopi.php") ?>
                    <section id="main">
                <div class="inner">
                    <header class="major special">
                        <!-- Form -->
                        <section>
                            <div class="gif"> 
                            <h3>SUA ENTREGA ESTÁ A CAMINHO!</h3>
                            <img src="images/entrega.gif" width="500"  height="300" align="center"></div>
                        </section>        
<br><br><br><br><br>


      <?php include ("rodape.php") ?>
        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>
       </body>
</html>