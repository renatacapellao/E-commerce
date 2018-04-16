<?php require_once("header.php"); ?>

	
<div class="container">
    <div class="row">
        
        <form class="form-horizontal" id="frmcontatoazul" name="formContato" action="envia.php" method="POST">
        <fieldset>
        
        <!-- Form Name -->
        <legend>Contato</legend>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 col-sm-6 col-xs-12" for="txtinputnome">Nome</label>  
          <div class="col-md-8">
          <input id="txtinputnome" name="txtinputnome" placeholder="Escreva seu nome completo" class="form-control input-md" required="required" type="text" />
         
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 col-sm-6 col-xs-12" for="txtinputemail">Email</label>  
          <div class="col-md-8">
          <input id="txtinputemail" name="txtinputemail" placeholder="Coloque um email válido" class="form-control input-md" required="required" type="email" />
         
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 col-sm-6 col-xs-12" for="txtinputassunto">Assunto</label>  
          <div class="col-md-8">
          <input id="txtinputassunto" name="txtinputassunto" placeholder="Informe do que se trata" class="form-control input-md" required="required" type="text" />
       
          </div>
        </div>
        
        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-12 col-sm-6 col-xs-12" for="txtinputarea">Mensagem</label>
          <div class="col-md-8">                     
            <textarea class="form-control" id="txtinputarea" rows="6" name="txtinputarea" placeholder="Escreva sua opinião, crítica ou sugestão para o site"></textarea>
          </div>
        </div>
        
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-12 col-sm-6 col-xs-12" for="btnenviar"></label>
          <div class="col-md-5">
            <button id="btnenviar" name="btnenviar" class="btn btn-primary btn-lg">Enviar</button>
          </div>
        </div>
        </div>		
        </fieldset>
        </form>
        </div>		

<br>
<br>
<br>
<br>


	<?php require_once("footer.php"); ?>