<?php require_once("header.php"); ?>


<?php 
	    if(!isset($_GET["id"])) {
      echo "<script>document.location.href = '../index.php' </script>";
    } else {
        $cn = mysqli_connect("localhost", "root", "", "test");

        $id = mysqli_real_escape_string($cn, $_GET["id"]);

        $q = mysqli_query($cn, "SELECT * FROM tbl_cliente WHERE cod_cliente = $id");

        if($r = mysqli_fetch_assoc($q)) {
          $titulo = $r["nome_cliente"];
          $descricao = $r["endereco"];
          $preco = $r["cep"];
          $imagem = $r["cidade"];
        } else {
          echo "<script>document.location.href = '../index.php;' </script>";
        }
    }


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