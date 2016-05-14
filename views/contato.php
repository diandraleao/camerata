<?php include('includes/header.php')?>
<?php include('includes/menu.php')?>

	<main id="content"  class="container">
		
		<header class="page-header">
			<h2> Contato</h2>
		</header>
		
			<div class="well">
				<form class="form-horizontal col-sm-19 col-sm-offset-1" action="/index.php/Site/doPost" method="POST">
				
				<div class="form-group">
					<label for="nome" class="col-sm-2 control-label">Nome:</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="nome" id="nome" placeholder="Informe seu nome">
					</div>
				</div>
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">E-mail:</label>
					<div class="col-sm-7">
						<input type="email" class="form-control"  name="email" id="email" placeholder="Informe seu email">
					</div>
				</div>
				
				<div class="form-group">
					<label for="mensagem" class="col-sm-2 control-label">Mensagem: </label>	
					<div class="col-sm-7">
						<textarea class="form-control" name="mensagem" rows="5" id="mensagem" placeholder="Digite sua mensagem"> </textarea>
					</div>
				</div>
			
				<div class="text-right col-sm-9">
					<input class="btn btn-primary" type="submit" value="Enviar">
				</div>
				 <br><br>
				</form>
			</div>
	</main>
	
	<?php include('includes/footer.php')?>