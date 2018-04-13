<?php

include('config.php');

$email = $_POST['email'];
$password = MD5($_POST['senha']);
//echo "SELECT * FROM usuarios WHERE email = '$email' and senha = '$password' LIMIT 1";
$login = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email' and senha = '$password' LIMIT 1");

if($r = mysqli_fetch_assoc($login)){
	$_SESSION['iduser'] = $r['id'];
	$_SESSION['nameuser'] = $r['nome'];
	header("Location: index.php");
	
}else{
	echo '<script> alert("E-MAIL ou SENHA inválidos"); </script>';
	//header("Location: login.php");

	}
	
?>