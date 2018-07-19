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
      <?php include ("cabeçalhopi.html") ?>
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
if(document.cadastro.nomeinst.value=="")
{
alert("O Campo Nome da Instituição é obrigatório!");
return false;
}
else 
if(document.cadastro.nomelivro.value=="")
{
alert("O Campo Nome do Livro é obrigatório!");
return false;
}
else
if(document.cadastro.email.value=="")
{
alert("O Campo Email para Contato é obrigatório!");
return false;
}
else
if(document.cadastro.endereco.value=="")
{
alert("O Campo Endereço a ser enviado é obrigatório!");
return false;
}
else 
if(document.cadastro.ddd.value=="")
{
alert("O Campo DDD é obrigatório!");
return false;
}
if(document.cadastro.telefone.value=="")
{
alert("O Campo Telefone é obrigatório!");
return false;
}
else
return true;
}
</script>
</head>
 
<body>
<form id="cadastro" name="cadastro" method="post" action="cadastro.php" onsubmit="return validaCampo(); return false;">
  <table width="625" border="0">
    <tr>
      <td width="69">Nome da Instituição:</td>
      <td width="546"><input name="nome" type="text" id="nomeinst" size="70" maxlength="500" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td width="69">Nome do Livro:</td>
      <td width="546"><input name="nome" type="text" id="nomelivro" size="70" maxlength="500" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Email para contato:</td>
      <td><input name="email" type="text" id="email" size="70" maxlength="500" />
      <span class="style1">*</span></td>
    </tr>
    <tr>
      <td> Telefone para contato </td>
      <td>DDD: <input name="ddd" type="text" id="ddd" size="2" maxlength="2" />
      <td>Telefone:<input name="telefone" type="text" id="telefone"/> </td>
    </tr>
    <tr>
      <td>Endereço a ser enviado:</td>
      <td><input name="endereco" type="text" id="endereco" size="70" maxlength="70" />
        <span class="style1">*</span></td>
    </tr>
      <td colspan="2"><p>

                  <div class="6u$ 12u$(small)">
                    <input type="checkbox" id="human" name="human" checked>
                    <label for="human">Eu sou humano e não um robô.</label>
                  </div>
          <input name="cadastrar" type="submit" id="cadastrar" value="Concluir o Cadastro!" /> 
          <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />
         </p>
      <p>           <span class="style1">* Campos com * são obrigatórios!          </span> </p></td>
  </table>
</form>

      <?php include ("rodape.html") ?>
        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>
       </body>
</html>