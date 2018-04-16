<?php require_once("header.php"); ?>
<?php
	
	session_start();
	
	if(!isset($_SESSION['carrinho'])){
		$_SESSION['carrinho'] = array();
	}

	if(isset($_GET['acao'])){

		if($_GET['acao'] == 'add'){
			$id = intval($_GET['id']);
			if(!isset($_SESSION['carrinho'] [$id])){
				$_SESSION['carrinho'][$id] = 1;
			}
			else{
				$_SESSION['carrinho'][$id] += 1;
			}
	}
}

	if(count($_SESSION['carrinho']) == 0){
		echo '<tr><td colspan = "5">Não há produto no carrinho</tr></td>';
	} else {
		require("config.php");
		foreach($_SESSION['carrinho'] as $id => $qtd){
			$sql = "SELECT * FROM PRODUTO WHERE ID_PRODUTO = '$id";
			$qr = mysql_query($sql);
			$ln = mysql_fetch_assoc($qr);

			$nome = $ln['NOME'];
			$preco = number_format($ln['PRECO'],2,',','.');
			$sub = number_format($ln['PRECO'] * $qtd,2,',','.');

			echo '<tr>
				<td>'.$nome.'</td>
				<td>&nbsp;</td>
				<td>'.$preco.'</td>
				<td>'.$sub.'</td>
				<td><a href ="?acao=del&id='.$id.'">Remover</a></td>
			</tr>
			';

		}
	}
?>	
<?php require_once("footer.php"); ?>