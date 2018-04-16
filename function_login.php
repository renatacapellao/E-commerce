<?php

include('config.php');

$email = $_POST['email'];
$password = MD5($_POST['senha']);
//echo "SELECT * FROM usuarios WHERE email = '$email' and senha = '$password' LIMIT 1";
$login = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email' and senha = '$password' LIMIT 1");
$status = mysqli_query($conn, "UPDATE usuarios SET STATUS = 'ATIVO' WHERE email = '$email'" );

if($r = mysqli_fetch_assoc($login)){
	session_start();
	$_SESSION['iduser'] = $r['id'];
	$_SESSION['nameuser'] = $r['nome'];
	header("Location: minhaconta.php");
	
}else{
	echo '<script> alert("E-MAIL ou SENHA inválidos"); document.location.href="login.php";</script>';
	//header("Location: login.php");

	}

	
	
?>