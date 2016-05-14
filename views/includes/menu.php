<body>
	<div class="container">
		<header id="header" class="row">
			<div class="col-md-4 col-md-offset-4">
				<a href="home"><img src="<?php echo base_url(); ?>static/img/logo.png" alt="Logo Camerata de Violões Brasilis" title="Camerata de Violões Brasilis" class="img-responsive"/></a>
			</div>
		</header>
	
	<!--Nav-->
		<nav class="navbar navbar-inverse">
			<ul class="nav navbar-nav">
				<li><a href="home">Home</a></li>
				<li><a href="quemsomos">Quem somos</a></li>
				<li><a href="repertorio">O que tocamos</a></li>
				<li class="dropdown">
	                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Galerias <span class="caret"></span></a>
	                <ul class="dropdown-menu">
					<li><a href="fotos">Fotos</a></li>
	                <li role="separator" class="divider"></li>
					<li><a href="videos">Videos</a></li>                  
	                </ul>
              	</li>
				<li><a href="produtos">Produtos</a></li>
				<li><a href="agenda">Agenda</a></li>
				<li><a href="contato">Contato</a></li>
			</ul>

			<div id="navbar" class="navbar-collapse collapse">
			  <form class="navbar-form navbar-right" action="/index.php/Site/buscar" method="Post">
				<div class="form-group">
					<div class="input-group">					   
						<input type="text" placeholder="Buscar" class="form-control" name="campo">
						<div class="input-group-btn">
					    	<input type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					   </div>
					</div>
				</div>
			  </form>
			</div>
		</nav>
	<!--Fim Nav-->
	</div>