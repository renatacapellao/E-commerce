<?php
session_start();
if(isset($_SESSION['nameuser']))
{
	?>
	
		<?php require_once("header2.php"); ?>
	
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
	
	
	<div class ="container">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicadores -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

  <!-- Imagens do slide -->
			<div class="carousel-inner" role="listbox" style="width:100%;">
				<div class="item active">
					<img src="img/banner.jpg" alt="...">
						<div class="carousel-caption">
						...
						</div>
				</div>
				
				
				<div class="item">
					<img src="img/banner2.jpg" alt="...">
						<div class="carousel-caption">
						...
						</div>
				</div>
				
				
				<div class="item">
					<img src="img/banner3.jpg" alt="...">
						<div class="carousel-caption">
						...
						</div>
				</div>
				
			</div>

  <!-- Botões -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			
			
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			
			
		</div>
		
		
	</div>
	
		
		<div class ="container">
			<span class = "produtosvistos_index col-md-12 col-sm-12 col-xs-12" style="margin-top:20px;">
				Produtos visitados
			</span> 
		<div class="row" style="margin-top:100px;">
		<?php while($r = mysqli_fetch_assoc($s)) { ?>
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/<?=$r["IMAGEM"]?>" style="height:200px;">
						<div class="caption">
							<h3><?=$r["NOME"]?></h3>
							<p><a href="detalhes_produto.php?id=<?=$r["ID_PRODUTO"]?>" class="btn btn-primary" role="button">Comprar</a> <a href="detalhes_produto.php?id=<?=$r["ID_PRODUTO"]?>" class="btn btn-default" role="button">Ver mais</a></p>
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
							<p><a href="detalhes_produto.php?id=<?=$r["ID_PRODUTO"]?>" class="btn btn-primary" role="button">Comprar</a> <a href="detalhes_produto.php?id=<?=$r["ID_PRODUTO"]?>" class="btn btn-default" role="button">Ver mais</a></p>
						</div>
				</div>
			</div>
		
		<?php } ?>
		</div>
	</div>	


	<?php require_once("footer.php"); ?>
	
	
<?php
}
else
{
	?>
	Você não esta conectado!
	<?php
}
?>