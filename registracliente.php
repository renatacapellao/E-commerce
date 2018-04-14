<?php

include('config.php');


$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$datanascimento = $_POST['datanascimento'];
$sexo = $_POST['sexo'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$senha = MD5($_POST['senha']);

$select = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email'");
if(mysqli_affected_rows($conn) >= 1){
	echo '<script> alert("O e-mail já esta em uso"); document.location.href="cadastroClient.php";</script>';
	die();

}else
$select = mysqli_query($conn, "SELECT * FROM usuarios WHERE cpf = '$cpf'");
if(mysqli_affected_rows($conn) >= 1){
	echo '<script> alert("O CPF já esta em uso"); document.location.href="cadastroClient.php";</script>';
	die();
	
}else
$select = mysqli_query($conn, "SELECT * FROM usuarios WHERE telefone = '$telefone'");
if(mysqli_affected_rows($conn) >= 1){
	echo '<script> alert("O telefone já esta em uso"); document.location.href="cadastroClient.php";</script>';
	die();

}else
$select = mysqli_query($conn, "SELECT * FROM usuarios WHERE celular = '$celular'");
if(mysqli_affected_rows($conn) >= 1){
	echo '<script> alert("O celular já esta em uso"); document.location.href="cadastroClient.php";</script>';
	die();
	
}

$in = mysqli_query($conn, "INSERT INTO usuarios (nome,email,cpf,datanascimento,sexo,cep,endereco,bairro,cidade,uf,telefone,celular,senha) VALUES ('$nome','$email','$cpf','$datanascimento','$sexo','$cep','$endereco','$bairro','$cidade','$uf','$telefone','$celular','$senha')");
echo '<script> alert("CADASTRO REALIZADO COM SUCESSO!"); document.location.href="login.php";</script>';

?>