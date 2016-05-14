<?php include('includes/header.php')?>
<?php include('includes/menu.php')?>

	<main id="content"  class="container">
		<!-- Carrossel-->
		<section id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			  <article class="item active">
				<img src="<?php echo base_url(); ?>static/img/banner-2.jpg" alt=""  class="img-responsive"/>
				<div class="carousel-caption">
				  <br>
				</div>
			  </article>
			  <article class="item">
				<img src="<?php echo base_url(); ?>static/img/banner-1.jpg" alt=""  class="img-responsive"/>
				<div class="carousel-caption">
				  <br>
				</div>
			  </article>
			  <article class="item">
				<img src="<?php echo base_url(); ?>static/img/banner-3.jpg" alt=""  class="img-responsive"/>
				<div class="carousel-caption">
				  <br>
				</div>
			  </article>
			  
			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
		</section>
		
		<hr class="style">
		
		<h3>Próximas apresentações <a href="agenda" class="btn btn-sm btn-default">ver mais <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></h3>
		<br>
		<section class="row">
			<article class="col-md-4">
				<div class="media">
					<div class="media-body">
						<h4 class="media-heading"> Pinacoteca Benedito Calixto </h4>
						<p class="text-muted"><span class="text-uppercase">Endereço:</span> Av. Bartolomeu de Gusmão, 15 - Boqueirão</p>
						<p><span class="text-uppercase">Data:</span> 21 de junho</p>
						<p><span class="text-uppercase">Horário:</span> 19h</p>
					</div>
				</div>
			</article>

			<article class="col-md-4">
				<div class="media">
					<div class="media-body">
						<h4 class="media-heading"> Pinacoteca Benedito Calixto </h4>
						<p class="text-muted"><span class="text-uppercase">Endereço:</span> Av. Bartolomeu de Gusmão, 15 - Boqueirão</p>
						<p><span class="text-uppercase">Data:</span> 21 de junho</p>
						<p><span class="text-uppercase">Horário:</span> 19h</p>
					</div>
				</div>
			</article>

			<article class="col-md-4">
				<div class="media">
					<div class="media-body">
						<h4 class="media-heading"> Pinacoteca Benedito Calixto </h4>
						<p class="text-muted"><span class="text-uppercase">Endereço:</span> Av. Bartolomeu de Gusmão, 15 - Boqueirão</p>
						<p><span class="text-uppercase">Data:</span> 21 de junho</p>
						<p><span class="text-uppercase">Horário:</span> 19h</p>
					</div>
				</div>
			</article>
		</section>
		<hr class="style">
		
		<h3>Destaques</h3>
		<br>
		<section id="services">
			<!-- Row of columns -->
			<div class="row">
			  <div class="col-md-4 col-xs-6">
				<a href="https://www.youtube.com/watch?v=20xpxO4y2S8"><img src="<?php echo base_url(); ?>static/img/camerata4.jpg" alt="" class="img-responsive img-destaque"/></a>
				<h4>Concurso: Mapa Cultural Paulista</h4>
				<p> Camerata de Violões Brasilis consegue o segundo lugar na categoria grupo instrumental. Confira a apresentação.</p>
			  </div>
			  <div class="col-md-4 col-xs-6">
				<a href="agenda"><img src="<?php echo base_url(); ?>static/img/camerata1.jpg" alt="" class="img-responsive img-destaque"/></a>
				<h4>Espetáculos</h4>
				<p> Conheça a agenda completa do grupo e programe-se.</p>
			  </div>
			  <div class="col-md-4 col-xs-6">
				<a href="http://www.youtube.com/CamerataBrasilis"><img src="<?php echo base_url(); ?>static/img/camerata2.jpg" alt="" class="img-responsive img-destaque"/></a>
				<h4>Canal no youtube</h4>
				<p> Venha conferir o canal do Camerata no youtube, recheado de novidades toda semana.</p>
			  </div>
			</div>
		  </section>
	</main>
	
	<?php include('includes/footer.php')?>