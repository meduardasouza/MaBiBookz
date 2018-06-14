<!DOCTYPE HTML>
<!--
  Introspect by TEMPLATED
  templated.co @templatedco
  Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
  <head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>

    <!-- Header -->
      <header id="header">
        <div class="inner">
          <a href="home.html" class="logo">MaBiBookz</a>
          <nav id="nav">
            <a href="home.html"> Página Inicial </a>
                  <a href="perfil.html">Perfil</a>
                  <a href="login.html">Login</a>
                  <a href="info.html"> Nosso Objetivo</a>
                  <a href="index.html">Sair</a>
          </nav>
        </div>
      </header>
      <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

    <!-- Main -->


<?php 
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);
  $connect = mysql_connect('nome_do_servidor','nome_de_usuario','senha');
  $db = mysql_select_db('nome_do_banco_de_dados');
    if (isset($entrar)) {
             
      $verifica = mysql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language="javascript" type="text/javascript">alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:index.php");
        }
    }
?>
      <section id="footer">
        <div class="inner">
          <div class="copyright">
            &copy; Maria Eduarda e Bianka. | Inspirado no Templated
          </div>
        </div>
        <br>
                  <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                  </ul>
      </section>

    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>

  </body>
</html>

