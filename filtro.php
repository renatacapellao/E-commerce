<?php require_once("header.php"); ?>


	  <?php 

    $nome = NULL;
    $descricao = NULL;
    $preco = NULL;
    $imagem = NULL;
	$categoria = NULL;
	$uso = NULL; 
	

   
        $cn = mysqli_connect("localhost", "root", "", "e-comerce");

        $q = mysqli_query($cn, "SELECT * FROM PRODUTO WHERE USO = 'novo'");
		
		$s = mysqli_query($cn, "SELECT * FROM PRODUTO WHERE USO = 'normal'");

  ?>

	<div class = "container"> 
		<div class = "row"> 
			<div class = "col-md-4 col-sm-4 col-xs-12">
				<img src="img/<?=$imagem; ?>" style="height:220px;width:100%;margin-top:80px;margin-bottom:40px;"> 
			</div>
			
			<div class = "col-md-8 col-sm-8 col-xs-12">
				<h1> </h1> 
			</div>
		</div> 
	</div>







<?php require_once("footer.php"); ?>