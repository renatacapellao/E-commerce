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

	<div class ="container">
		<div class = "col-md-4 col-sm-4 col-xs-12 produtodesc_img">
			<img src="img/<?=$imagem; ?>" style="height:220px;width:100%;margin-top:80px;margin-bottom:40px;">
			<h3 style="text-align:center;font-weight:normal;"><?=$preco?></h3>
			<a href="carrinho.php?id=<?=$r["ID_PRODUTO"]?>" class="btn btn-primary" style="margin-left:25%;width:50%;">Add ao carrinho</a>
		</div>
		
		<div class = "col-md-6 col-sm-6 col-xs-12 produtodesc_texto">
			<h3><?=$nome; ?></h3>
			<p><?=$descricao ?></p>
      
		</div>
	</div>
	

  <?php require_once("footer.php"); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
<?php 
    
    mysqli_close($cn);
  
?>