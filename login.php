<?php require_once("header.php"); ?>
<script language="javascript" type="text/javascript">
function validalogin()
{
if(document.login.email.value=='')
{
	alert("O campo E-MAIL é obrigatório!");
	document.getElementById('email').focus();
	return false;
}
else
if(document.login.senha.value=='')
{
	alert("O campo PASSWORD é obrigatório!");
	document.getElementById('senha').focus();
	return false;
}
else
	return true;
	
}
</script>




<div class="container">
    <div class="row">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Login </h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" name="login" method="post" action="function_login.php" onsubmit="return validalogin();return false;">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="yourmail@example.com" name="email" id="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="senha" id="senha" type="password" value="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
			    	</fieldset>
			      	</form>
					<form action ="cadastroClient.php" style="margin-top:10px;">
						<input class="btn btn-lg btn-success btn-block" type="submit" value="Cadastre-se" style="background-color:white; color:green;">
					</form>
                      <hr/>
                   
			    </div>
			</div>
		</div>
	</div>
</div>


	<?php require_once("footer.php"); ?>