<?php require_once("header.php"); ?>
		<div class = "container">
		<div class="row" style="margin-left:30%;margin-bottom:40px;margin-top:20px;"><h2>Carrinho de compra</h2></div>
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
		
			
				<div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">Produto</div>
                 <div class="col-md-2 col-sm-2 col-xs-2">Preço Unidade</div>
                 <div class="col-md-2 col-sm-2 col-xs-2">Preço Total</div>
                 <div class="col-md-2 col-sm-2 col-xs-2">SubTotal</div>
                 <div class="col-md-2 col-sm-2 col-xs-2">Remover</div>
                
				</div>

      

        <?php
            echo ' 
           <div class="row" style="margin-top:20px;">
				<div class="col-md-2 col-sm-2 col-xs-2" >'.$nome.'</div>
				<div class="col-md-2 col-sm-2 col-xs-2"><input type = "text" size="3" name="prod['.$id.']" value="'.$qtd.'"/> </div>
				<div class="col-md-2 col-sm-2 col-xs-2">'.$preco.'</div>
				<div class="col-md-2 col-sm-2 col-xs-2">'.$sub.'</div>
                <div class="col-md-2 col-sm-2 col-xs-2"> <a href ="?acao=del&id='.$id.'">Remover</a></div>
		   </div>
            <br>
			';
            }
            
            
		}
	}
	

		?>

			  <form action="?acao=up" method="post"></form>

        <tfoot>

            <tr>
                <td colspan="5"><input type="submit" value="Atualizar carrinho"></td>
            
            </tr>

        </tfoot>
	
    <a href="index.php" class="btn btn-primary" role="button">Retornar</a>
	</div>
<?php require_once("footer.php"); ?>