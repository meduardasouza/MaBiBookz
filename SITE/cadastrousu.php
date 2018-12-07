<!DOCTYPE HTML>
<!--
	Introspect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Cadastro</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
      <?php include ("cabeçalhosc.php") ?>

		<!-- Main -->
			<section id="main">
				<div class="inner">
					<header class="major special">
						<!-- Form -->
						<section>
							<h3>Cadastro</h3>
			</section>		
<!-- Footer -->
<script type="text/javascript">
function validaCampo()
{
if(document.cadastro.nome.value=="")
{
alert("O Campo nome é obrigatório!");
return false;
}
else
if(document.cadastro.email.value=="")
{
alert("O Campo email é obrigatório!");
return false;
}
else
if(document.cadastro.endereco.value=="")
{
alert("O Campo endereço é obrigatório!");
return false;
}
else
if(document.cadastro.cidade.value=="")
{
alert("O Campo Cidade é obrigatório!");
return false;
}
else
if(document.cadastro.estado.value=="")
{
alert("O Campo Estado é obrigatório!");
return false;
}
else
if(document.cadastro.bairro.value=="")
{
alert("O Campo Bairro é obrigatório!");
return false;
}
else
if(document.cadastro.pais.value=="")
{
alert("O Campo país é obrigatório!");
return false;
}
else
if(document.cadastro.login.value=="")
{
alert("O Campo Login é obrigatório!");
return false;
}
else
if(document.cadastro.senha.value=="")
{
alert("Digite uma senha!");
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
      <td width="69">Nome ou Instituição:</td>
      <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="500" />
        <span class="style1">*</span></td>
    </tr>
      <td>Email:</td>
      <td><input name="email" type="text" id="email" size="70" maxlength="500" />
      <span class="style1">*</span></td>
    </tr>
    <tr>
         <td>
          <span for="imagem" class="style1">Imagem de perfil:</span>
         </td>
         <td>
          <input type="file" name="imagem" >
         </td>
    </tr>
    <tr>
      <td>DDD:</td>
      <td><input name="ddd" type="text" id="ddd" size="2" maxlength="2" />
      <td>Telefone:</td>
      <td><input name="telefone" type="text" id="telefone"/> </td>
    </tr>
    <tr>
      <td>Rua:</td>
      <td><input name="rua" type="text" id="rua" maxlength="50" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Bairro:</td>
      <td><input name="bairro" type="text" id="bairro" maxlength="50" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Cidade:</td>
      <td><input name="cidade" type="text" id="cidade" maxlength="50" />
        <span class="style1">*</span></td>
    </tr>
            <tr>
      <td>Estado:</td>
      <td><select name="estado" id="estado">
        <option>Selecione...</option>
        <option value="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AP">AP</option>
        <option value="AM">AM</option>
        <option value="BA">BA</option>
        <option value="CE">CE</option>
        <option value="ES">ES</option>
        <option value="DF">DF</option>
        <option value="MA">MA</option>
        <option value="MT">MT</option>
        <option value="MS">MS</option>
        <option value="MG">MG</option>
        <option value="PA">PA</option>
        <option value="PB">PB</option>
        <option value="PR">PR</option>
        <option value="PE">PE</option>
        <option value="PI">PI</option>
        <option value="RJ">RJ</option>
        <option value="RN">RN</option>
        <option value="RS">RS</option>
        <option value="RO">RO</option>
        <option value="RR">RR</option>
        <option value="SC">SC</option>
        <option value="SP">SP</option>
        <option value="SE">SE</option>
        <option value="TO">TO</option>
          </select>
        <span class="style1">*      </span></td>
    </tr>
    <tr>
      <td>Usuário:</td>
      <td><input name="username" type="text" id="username" maxlength="30" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Senha:</td>
      <td><input name="senha" type="password" id="senha" maxlength="30" />
          <span class="style1">*</span></td>
    </tr>
    <tr>
      <td colspan="2"><p>

                  <div class="6u$ 12u$(small)">
                    <input type="checkbox" id="human" name="human" checked>
                    <label for="human">Eu sou humano e não um robô.</label>
                  </div>
          <input name="cadastrar" type="submit" id="cadastrar" value="Concluir meu Cadastro!" /> 
          <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />
         </p>
      <p>           <span class="style1">* Campos com * são obrigatórios!          </span> </p></td>
      <h5> <a href="login.php"> Já tem cadastro? Faça login! </a> </h5>
    </tr>
  </table>
</form>

      <?php include ("rodape.php") ?>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
  <!-- to commit -->
</html>