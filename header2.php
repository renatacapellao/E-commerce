<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>E-commerce Eletronicos</title>

    <!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Estilo Personalizado -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/estilo.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
    <nav class="navbar navbar-default navbar-fixed-top">
  		<div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
          		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
          		</button>
          		<a class="navbar-brand" href="minhaconta.php">Home</a>
        	</div>

        	<!-- Collect the nav links, forms, and other content for toggling -->
        	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          		<ul class="nav navbar-nav">
            		<li><a href="sobre.php">Sobre</a></li>
              		<li><a href="FaleConosco.php">Fale conosco</a></li>
            		<li class="dropdown">
              			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produtos<span class="caret"></span></a>
              			<ul class="dropdown-menu">
			                <li><a href="filtro.php?id=1">Celulares</a></li>
			                <li><a href="filtro.php?id=2">Video Games</a></li>
			                <li role="separator" class="divider"></li>
              				<li><a href="filtro.php?id=3">Televisão</a></li>
              				<li><a href="filtro.php?id=4">Outros</a></li>
              			</ul>
            		</li>
          		</ul>
          		<form class="navbar-form navbar-left" action="busca.php" method="post">
            		<div class="form-group">
              			<input type="text" class="form-control" placeholder="Search" name="palavra">
            		</div>
            		<input type="submit" Value="Buscar" />
          		</form>
				
				
				
          		<ul class="nav navbar-nav navbar-right">
            		<li><a href="carrinho.php"><i class="glyphicon glyphicon-shopping-cart"></i></a></li>
            		<li class="dropdown">
              			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i><span class="caret"></span></a>
              			<ul class="dropdown-menu">
                			<li><a href="painel.php">Minha conta</a></li>
			                <li><a href="#">Histórico</a></li>
			                <li><a href="#">Meus pedidos</a></li>
			                <li role="separator" class="divider"></li>
			                <li><a href="logout.php">Log out</a></li>
			            </ul>
            		</li>
          		</ul>
        	</div><!-- /.navbar-collapse -->
      	</div><!-- /.container-fluid -->
    </nav>