<!DOCTYPE HTML>
<!--
    Introspect by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
        <title> Cadastro de Livro </title>
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
                            <h3>Cadastro de Livro</h3>
            </section>        
<!-- Footer -->
<script type="text/javascript">
function validaCampo()
{
if(document.cadastro.nome_livro.value=="")
{
alert("O Campo Nome do Livro é obrigatório!");
return false;
}
else
if(document.cadastro.genero.value=="")
{
alert("O Campo Gênero é obrigatório!");
return false;
}
else
if(document.cadastro.autor.value=="")
{
alert("O Campo Autor é obrigatório!");
return false;
}
else 
if(document.cadastro.editora.value=="")
{
alert("O Campo Editora é obrigatório!");
return false;
}
else 
if(document.cadastro.isbn.value=="")
{
alert("O Campo ISBN é obrigatório!");
return false;
}
else
if(document.cadastro.sinopse.value=="")
{
alert("O Campo Sinopse é obrigatório!");
return false;
}
else
return true;
}
</script>
</head>
 
<body>
<form id="cadastrolivroser" name="cadastrolivroser" method="post" action="cadastrolivroser.php" onsubmit="return validaCampo(); return false;">
  <table width="625" border="0">
    <tr>
      <td width="69">Nome do Livro:</td>
      <td width="546"><input name="nome_livro" type="text" id="nome_livro" size="70" maxlength="500" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td width="69">Gênero do Livro:</td>
      <td width="546"><input name="genero" type="text" id="genero" size="70" maxlength="500" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Autor:</td>
      <td><input name="autor" type="text" id="autor" size="70" maxlength="500" />
      <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Editora: </td>
      <td><input name="editora" type="text" id="editora" size="70" maxlength="500" /> 
      <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>ISBN: </td>
      <td><input name="isbn" type="text" id="isbn" size="70" maxlength="500" /> 
      <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Sinopse: </td>
      <td><input name="sinopse" type="text" id="sinopse" size="70" maxlength="5000" /> 
      <span class="style1">*</span></td>
    </tr>
      <td colspan="2"><p>

                  <div class="6u$ 12u$(small)">
                    <input type="checkbox" id="human" name="human" checked="">
                    <label for="human">Eu sou humano e não um robô.</label>
                  </div>
          <input name="cadastrar" type="submit" id="cadastrar" value="Concluir o Cadastro!" /> 
          <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />
         </p>
      <p>           <span class="style1">* Campos com * são obrigatórios!          </span> </p></td>
  </table>
</form>

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