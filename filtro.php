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

		$sql = "SELECT * FROM PRODUTO WHERE ID_CATEGORIA = $id";

        $busca_categoria = mysqli_query($cn, $sql);
		
		if ($busca_categoria){
			while ($r = mysqli_fetch_array($busca_categoria)) {
				echo "	<a href='detalhes_produto.php?id=$r[ID_PRODUTO]' style='text-decoration:none;color:black;'>";
				echo"<div class = 'row' > 
					<img src ='img/$r[IMAGEM]' style='margin-left:35%;margin-right:35%;width:30%;margin-top:30px;'><br />";
	
					echo "<h4 style='text-align:center;margin-bottom:50px;'>$r[NOME]</h4><br />
		</div></a>";
	
		}

		} else
		echo "nao tem resultado";
    }


  ?>







<?php require_once("footer.php"); ?>