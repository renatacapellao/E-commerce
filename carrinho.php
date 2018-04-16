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
        
        if($_GET['acao'] == 'del'){
			$id = intval($_GET['id']);
			if(isset($_SESSION['carrinho'] [$id])){
				unset($_SESSION['carrinho'][$id]);
			}
	}
}


    

	if(count($_SESSION['carrinho']) == 0){
		echo '<tr><td colspan = "5">Não há produto no carrinho</tr></td>';
	} else {
		require("config.php");
		foreach($_SESSION['carrinho'] as $id => $qtd){
			$sql = "SELECT * FROM PRODUTO WHERE ID_PRODUTO =".$id;
			$qr = mysqli_query($conn,$sql);
			$ln = mysqli_fetch_assoc($qr);
            if($ln){
			$nome = $ln['NOME'];
			$preco = number_format($ln['PRECO'],2,',','.');
			$sub = number_format($ln['PRECO'] * $qtd,2,',','.');
                
            ?>

        <table>Carrinho de compra
            <tr>
                <th width="144">Produto</th>
                <th width="79">Preço Unid</th>
                <th width="89">Preço Total</th>
                <th width="100">SubTotal</th>
                <th width="64">Remover</th>
            </tr>
        </table>

        <form action="" method="post"></form>

        <tfoot>

            <tr>
                <td colspan="5"><input type="submit" value="Atualizar carrinho"></td>
            
            </tr>

        </tfoot>

        <?php
            echo ' 
            <tr>
				<td>'.$nome.'</td>
				<td><input type = "text" size="3" name="prod['.$id.']" value="'.$qtd.'"/> </td>
				<td>'.$preco.'</td>
				<td>'.$sub.'</td>
                <td> <a href ="?acao=del&id='.$id.'">Remover</a></td>
			</tr>
            <br>
			';
            }
            
            
		}
	}

?>	

    <a href="index.php" class="btn btn-primary" role="button">Retornar</a>
<?php require_once("footer.php"); ?>