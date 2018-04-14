<?php require_once("header.php"); ?>

<?php
$cn = mysqli_connect("localhost", "root", "", "e-comerce");

$busca = $_POST['palavra'];// palavra que o usuario digitou

$busca_query = mysqli_query($cn,"SELECT * FROM PRODUTO WHERE NOME OR DESCRICAO LIKE '%$busca%'");//faz a busca com as palavras enviadas

if (empty($busca_query)) { //Se nao achar nada, lança essa mensagem
    echo "Nenhum registro encontrado.";
}

// quando existir algo em '$busca_query' ele realizará o script abaixo.
while ($dados = mysqli_fetch_array($busca_query)) {
	echo "	<a href='detalhes_produto.php?id=$dados[ID_PRODUTO]'>";
	echo"<div class = 'row' > 
				<img src ='img/$dados[IMAGEM]' style='margin-left:35%;margin-right:35%;width:30%;'><br />";

				echo "<h3 style='text-align:center'>$dados[NOME]</h3><br />
	</div></a>";

}
?>

<?php require_once("footer.php"); ?>