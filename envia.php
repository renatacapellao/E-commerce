<?php require_once("header.php");?>

	<?php 
		$para="matheus_jordan@yahoo.com.br";
		$titulo="Contato pelo site";
		$nome=$_POST['txtinputnome'];
		$email=$_POST['txtinputemail'];
		$assunto=$_POST['txtinputassunto'];
		$msg=$_POST['txtinputarea'];
		
		$corpo = "<strong>Mensagem de Contato</strong><br><br>";
		$corpo = "<strong>Nome :</strong> $nome";
		$corpo = "<br><strong>Email :</strong> $email";
		$corpo = "<br><strong>Assunto :</strong> $assunto";
		$corpo = "<br><strong>Mensagem :</strong> $mensagem";
		
		echo $nome."<br/>";
		echo $email."<br/>";
		echo $assunto."<br/>";
		echo $msg."<br/>";
	
	?>
	
<?php require_once("footer.php"); ?>