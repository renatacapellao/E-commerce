<?php require_once("header.php"); ?>

<script language="javascript" type="text/javascript">
var confsexo = 0; 

function validacampo()
{
if(document.cadastro.nome.value=='')
{
	alert("O campo NOME é obrigatório!");
	document.getElementById('nome').focus();
	return false;
}
else
if(document.cadastro.email.value=='')	
{
	alert("O campo E-MAIL é obrigatório!");
	document.getElementById('email').focus();
	return false;
}
else
if(document.cadastro.cpf.value=='')
{
	alert("O campo CPF é obrigatório!");
	document.getElementById('cpf').focus();
	return false;
}
else
if(document.cadastro.datanascimento.value=='')
{
	alert("O campo DATA DE NASCIMENTO é obrigatório!");
	document.getElementById('datanascimento').focus();
	return false;
}
else
if(document.getElementById('sexo').value == confsexo)
{
	alert("O campo SEXO é obrigatório!");
	document.getElementById('sexo').focus();
	return false;
}
else
if(document.cadastro.cep.value=='')
{
	alert("O campo CEP é obrigatório!");
	document.getElementById('cep').focus();
	return false;
}
else
if(document.cadastro.endereco.value=='')
{
	alert("O campo ENDERECO é obrigatório!");
	document.getElementById('endereco').focus();
	return false;
}
else
if(document.cadastro.bairro.value=='')
{
	alert("O campo BAIRRO é obrigatório!");
	document.getElementById('bairro').focus();
	return false;
}
else
if(document.cadastro.cidade.value=='')
{
	alert("O campo CIDADE é obrigatório!");
	document.getElementById('cidade').focus();
	return false;
}
else
if(document.cadastro.uf.value=='')
{
	alert("O campo UF é obrigatório!");
	document.getElementById('uf').focus();
	return false;
}
else
if(document.cadastro.telefone.value=='')
{
	alert("O campo TELEFONE é obrigatório!");
	document.getElementById('telefone').focus();
	return false;
}
else
if(document.cadastro.celular.value=='')
{
	alert("O campo CELULAR é obrigatório!");
	document.getElementById('celular').focus();
	return false;
}
else
if(document.cadastro.senha.value=='')
{
	alert("O campo SENHA é obrigatório!");
	document.getElementById('senha').focus();
	return false;
}
else
if(document.cadastro.confirmasenha.value=='')
{
	alert("O campo CONFIRMAR SENHA é obrigatório!");
	document.getElementById('confirmasenha').focus();
	return false;
}
else
if(document.getElementById('confirmasenha').value != document.getElementById('senha').value)
{
	alert("As senhas não conferem, por favor, redigite!");
	document.getElementById('confirmasenha').focus();
	return false;
}
else
	return true;
}
</script>


  <form class="form-horizontal" name="cadastro" method="post" action="registracliente.php" onsubmit="return validacampo();return false;">
<fieldset>

<!-- Form Name -->
<div class="container">
    <div class="page-header">
        <h1>Cadastro de Clientes</h1>
    </div>
</div>
<div style="background-color: #4ED4E8"></div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Nome</label>  
  <div class="col-md-5">
  <input id="nome" name="nome" type="text" placeholder="Entre com o Nome" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
	<label class="col-md-4 control-label" for="email">E-mail</label>
	<div class="col-md-5">
	<input id="email" name="email" type="email" placeholder="Email@example.com.br" class="form-control input-md">
	
	</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cpf">CPF</label>  
  <div class="col-md-5">
  <input id="cpf" name="cpf" type="text" placeholder="Numero do CPF" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="datanascimento">Data de Nascimento</label>  
  <div class="col-md-4">
  <input id="datanascimento" name="datanascimento" type="text" placeholder="dd/mm/yyyy" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="sexo">Sexo</label>
  <div class="col-md-4">
    <select id="sexo" name="sexo" class="form-control">
	  <option value="0">Selecione...</option>
      <option value="F">Feminino</option>
      <option value="M">Masculino</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cep">CEP</label>  
  <div class="col-md-4">
  <input id="cep" name="cep" type="text" placeholder="99999-999" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="endereco">Endereco</label>  
  <div class="col-md-6">
  <input id="endereco" name="endereco" type="text" placeholder="Rua Numero Complemento" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="bairro">Bairro</label>  
  <div class="col-md-5">
  <input id="bairro" name="bairro" type="text" placeholder="Bairro" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cidade">Cidade</label>  
  <div class="col-md-6">
  <input id="cidade" name="cidade" type="text" placeholder="Cidade" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="uf">UF</label>  
  <div class="col-md-2">
  <input id="uf" name="uf" type="text" placeholder="Estado" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefone">Telefone</label>  
  <div class="col-md-4">
  <input id="telefone" name="telefone" type="text" placeholder="(99)999999999" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="celular">Celular</label>  
  <div class="col-md-4">
  <input id="celular" name="celular" type="text" placeholder="(99)999999999" class="form-control input-md">
    
  </div>
</div>



<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="senha">Senha</label>
  <div class="col-md-4">
    <input id="senha" name="senha" type="password" placeholder="Entre com a Senha" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="confirmasenha">Confirma Senha</label>
  <div class="col-md-4">
    <input id="confirmasenha" name="confirmasenha" type="password" placeholder="Confirme a Senha" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
  
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Salvar</button>
  </div>
</div>

</fieldset>
</form>
</div>


<br>
<br>
<br>
	<?php require_once("footer.php"); ?>