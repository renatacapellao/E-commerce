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
	
	<div class="jumbotron">
		<div class ="container">
			<img src="img/banner.jpg" style="height:auto; width:100%;">
		</div>
	</div>
	
	
	



		
		<div class ="container">
		<span class = "produtosvistos_index col-md-12 col-sm-12 col-xs-12">
			Produtos visitados
		</span> 
		<div class="row">
		<?php while($r = mysqli_fetch_assoc($s)) { ?>
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/<?=$r["IMAGEM"]?>" style="height:200px;">
						<div class="caption">
							<h3><?=$r["NOME"]?></h3>
							<p><a href="detalhes_produto.php?id=<?=$r["ID_PRODUTO"]?>" class="btn btn-primary" role="button">Comprar</a> <a href="#" class="btn btn-default" role="button">Ver mais</a></p>
					</div>
			</div>
		</div>
		
		<?php } ?>
		</div>
		</div>
		

		<div class ="container">
		<span class = "produtosvistos_index col-md-12 col-sm-12 col-xs-12">
			Novos Produtos
		</span> 
		<div class="row">
		
		<?php while($r = mysqli_fetch_assoc($q)) { ?>
		
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/<?=$r["IMAGEM"]?>" style="height:200px;">
						<div class="caption">
							<h3><?=$r["NOME"]?></h3>
							<p><a href="detalhes_produto.php?id=<?=$r["ID_PRODUTO"]?>" class="btn btn-primary" role="button">Comprar</a> <a href="#" class="btn btn-default" role="button">Ver mais</a></p>
					</div>
			</div>
		</div>
		
		<?php } ?>
		</div>
	</div>	


	<?php require_once("footer.php"); ?>