	<?php require_once("header.php"); ?>
	
	  <?php 

    $nome = NULL;
    $descricao = NULL;
    $preco = NULL;
    $imagem = NULL;
	$categoria = NULL;
	$uso = NULL; 
	

    if(!isset($_GET["id"])) {
      echo "<script>document.location.href = '../index.php' </script>";
    } else {
        $cn = mysqli_connect("localhost", "root", "", "e-comerce");

        $id = mysqli_real_escape_string($cn, $_GET["id"]);

        $q = mysqli_query($cn, "SELECT * FROM tbl_cliente WHERE cod_cliente = $id");

        if($r = mysqli_fetch_assoc($q)) {
          $nome = $r["NOME"];
          $descricao = $r["DESCRICAO"];
          $preco = $r["PRECO"];
          $imagem = $r["IMAGEM"];
		  $categoria = $r["CATEGORIA"];
        } else {
          echo "<script>document.location.href = '../index.php;' </script>";
        }
    }

    


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
		
		<?php while($r = mysqli_fetch_assoc($q)) { ?>
		
		<div class="row" style="margin-top:60px;">
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/lg1.jpg" alt="..." style="height:200px;">
						<div class="caption">
							<h3><?=$r["NOME"]?></h3>
							<p><a href="detalhes_produto.php?id=<?=$r["id"]?>" class="btn btn-primary" role="button">Comprar</a> <a href="#" class="btn btn-default" role="button">Ver mais</a></p>
						</div>
				</div>
			</div>
		
		<?php } ?>

		<span class = "produtosvistos_index col-md-12 col-sm-12 col-xs-12">
			Novos Produtos
</span> 
		
		<div class="row" style="margin-top:60px;">
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/lg2.jpg" alt="..." style="height:200px;">
						<div class="caption">
							<h3>LG G6 H870DS Internacional</h3>
							<p>Em estoque</p>
							<p><a href="#" class="btn btn-primary" role="button">Comprar</a> <a href="#" class="btn btn-default" role="button">Ver mais</a></p>
						</div>
				</div>
			</div>
		
  
  
		
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/lg3.jpg" alt="..." style="height:200px;">
						<div class="caption">
							<h3>LG G6 PLUS H870DSU</h3>
							<p>Em estoque</p>
							<p><a href="#" class="btn btn-primary" role="button">Comprar</a> <a href="#" class="btn btn-default" role="button">Ver mais</a></p>
						</div>
				</div>
			</div>
		
		
		
		
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/ps4.jpg" alt="..." style="height:200px;">
						<div class="caption">
							<h3>PlayStation 4 Pro 1TB Console</h3>
							<p>Em estoque</p>
							<p><a href="#" class="btn btn-primary" role="button">Comprar</a> <a href="#" class="btn btn-default" role="button">Ver mais</a></p>
						</div>
				</div>
			</div>
	
		
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/nitendo.jpg" alt="..." style="height:200px;">
						<div class="caption">
							<h3>Nintendo Switch com Neon Blue</h3>
							<p>Em estoque</p>
							<p><a href="#" class="btn btn-primary" role="button">Comprar</a> <a href="#" class="btn btn-default" role="button">Ver mais</a></p>
						</div>
				</div>
			</div>
		</div>
		
			<div class="row">
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/notebook.jpg" alt="..." style="height:200px;">
						<div class="caption">
							<h3>Notebook Acer Core i7  </h3>
							<p>Em estoque</p>
							<p><a href="#" class="btn btn-primary" role="button">Comprar</a> <a href="#" class="btn btn-default" role="button">Ver mais</a></p>
						</div>
				</div>
			</div>
		
  
  
		
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/Watch.jpg" alt="..." style="height:200px;">
						<div class="caption">
							<h3>Fosco Apple Watch 42mm</h3>
							<p>Em estoque</p>
							<p><a href="#" class="btn btn-primary" role="button">Comprar</a> <a href="#" class="btn btn-default" role="button">Ver mais</a></p>
						</div>
				</div>
			</div>
		
		
		
		
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/kitrazer.jpg" alt="..." style="height:200px;">
						<div class="caption">
							<h3>Razer Cyclosa Combo </h3>
							<p>Em estoque</p>
							<p><a href="#" class="btn btn-primary" role="button">Comprar</a> <a href="#" class="btn btn-default" role="button">Ver mais</a></p>
						</div>
				</div>
			</div>
	
		
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/tv.jpg" alt="..." style="height:200px;">
						<div class="caption">
							<h3>Smart TV LED 58" UHD 4K Samsung</h3>
							<p>Em estoque</p>
							<p><a href="#" class="btn btn-primary" role="button">Comprar</a> <a href="#" class="btn btn-default" role="button">Ver mais</a></p>
						</div>
				</div>
			</div>
		</div>
		
	</div>

	<?php require_once("footer.php"); ?>