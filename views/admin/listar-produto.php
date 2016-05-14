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
				<h2>Lista de produtos</h2>
			</header>

			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nome</th>
						<th>Descrição</th>
						<th>Imagem</th>
						<th>editar</th>
						<th>excluir</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>00</td>
						<td>xxxxxxx</td>
						<td>xxxx xx xxxxxx xxxxxxxxx xxxxxxxx xxxx</td>
						<td>url/caminho/da/imagem.jpg</td>
						<td><a href="#">editar</a></td>
						<td><a href="#">excluir</a></td>
					</tr>
				</tbody>
			</table>
		</main>

    </div> <!-- /container -->

</body>
</html>