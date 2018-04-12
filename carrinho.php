<?php require_once("header.php"); ?>

<?php 

    $nome = NULL;
    $descricao = NULL;
    $preco = NULL;
    $imagem = NULL;
	$categoria = NULL;
	$uso = NULL;

    if(!isset($_GET["id"])) {
      echo "<script>document.location.href = 'index.php' </script>";
    } else {
        $cn = mysqli_connect("localhost", "root", "", "e-comerce");

        $id = mysqli_real_escape_string($cn, $_GET["id"]);

        $q = mysqli_query($cn, "SELECT * FROM PRODUTO WHERE ID_PRODUTO = $id");

        if($r = mysqli_fetch_assoc($q)) {
          $nome = $r["NOME"];
          $descricao = $r["DESCRICAO"];
          $preco = $r["PRECO"];
          $imagem = $r["IMAGEM"];
		  $uso = $r["USO"];
        } else {
          echo "<script>document.location.href = 'index.php;' </script>";
        }
    }

    

  ?>
  
  
		
	<div class="container">
		<div class = "row" style="margin-bottom:50px;">
			<div class = "col-md-12 col-sm-12 col-xs-12">
				<h1 style="text-align:center; font-weight:normal;">Minhas compras</h1>
			</div>
		</div>
	
		<div class = "row">
			<div class="col-sm-2 col-md-2 col-xs-2">
				<h4>Código produto</h4>
			</div>
			
			<div class="col-sm-6 col-md-6 col-xs-6">
				<h4>Nome do produto</h4>
			</div>
			
			<div class="col-sm-4 col-md-4 col-xs-4">
				<h4>Preço</h4>
			</div>
		</div>
	
		<div class = "row">
			<div class="col-sm-2 col-md-2 col-xs-2">
				<h4><?=$id; ?></h4>
			</div>
			
			<div class="col-sm-6 col-md-6 col-xs-6">
				<h4><?=$nome; ?></h4>
			</div>
			
			<div class="col-sm-4 col-md-4 col-xs-4">
				<h4><?=$preco; ?></h4>
			</div>
		</div>
		
		
		<?php 
			$un = $un + 1;
			
			$compra =array('$id','$nome','$preco'); 
		
		
		?>
		<a>Continuar comprando </a>
	</div>
	
	
	
	
<?php require_once("footer.php"); ?>