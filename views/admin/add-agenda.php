<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> Admin | Camerata de Violões Brasilis</title>
	
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
    
    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>

    <!-- CSS local -->
    <link rel="stylesheet" type="text/css" href="../css/principal.css"/>

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <style>
    
    </style>
</head>

<body>

	<div class="container">
		<header id="header" class="row">
			<div class="col-md-4 col-md-offset-4">
				<a href="home.html"><img src="../img/logo.png" alt="Logo Camerata de Violões Brasilis" title="Camerata de Violões Brasilis" class="img-responsive"/></a>
			</div>
		</header>

		<nav class="navbar navbar-default nav-justified">
            
	      <ul class="nav navbar-nav ">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agenda <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Listar</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar</a></li>
	          </ul>
	        </li>

	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produtos <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Listar</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar</a></li>
	          </ul>
	        </li>

	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Repertório <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Listar</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar</a></li>
	          </ul>
	        </li>

	      </ul>
		</nav>

		<main>
			<header class="page-header">
				<h2>Adicionar evento</h2>
			</header>

			<form class="form-horizontal">

				<div class="form-group">
					<label for="local" class="col-sm-2 control-label">Local: </label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="local" placeholder="Insira o local do evento">
					</div>
				</div>

				<div class="form-group">
					<label for="Data" class="col-sm-2 control-label">Data: </label>
					<div class="col-sm-8">
						<input type="date" class="form-control" id="Data" placeholder="">
					</div>
				</div>

				<div class="form-group">
					<label for="horario" class="col-sm-2 control-label">Horário: </label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="horario" placeholder="Exemplo: 19h30">
					</div>
				</div>


				<div class="col-sm-10">
					<button class="btn btn-default pull-right">Cadastrar</button>
				</div>
			</form>

		</main>

    </div> <!-- /container -->

</body>
</html>