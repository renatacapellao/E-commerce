<?php require_once("header.php"); ?>

<?php
$cn = mysqli_connect("localhost", "root", "", "e-comerce");

$busca = $_POST['palavra'];

$busca_query = mysqli_query($cn,"SELECT * FROM PRODUTO WHERE NOME OR IMAGEM OR DESCRICAO LIKE '%$busca%'");


while ($dados = mysqli_fetch_array($busca_query)) {
	echo "	<a href='detalhes_produto.php?id=$dados[ID_PRODUTO]' style='text-decoration:none;color:black;'>";
	echo"<div class = 'row' > 
				<img src ='img/$dados[IMAGEM]' style='margin-left:35%;margin-right:35%;width:30%;margin-top:30px;'><br />";

				echo "<h4 style='text-align:center;margin-bottom:50px;'>$dados[NOME]</h4><br />
	</div></a>";

}

?>


<?php require_once("footer.php"); ?>