<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> Fotos | Camerata de Violões Brasilis</title>
	
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- jQuery necessery for lighbox plugin -->
    <script src="js/jquery-1.8.3.min.js"></script>
	<script src="js/jquery.cycle.all.js"></script>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/lightbox.js"></script>
	<script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();
    });
		
	$(document).ready(function() {
    $('a').click(function() {
        $('a.active').removeClass("active");
        $(this).addClass("active");
    });
	});
    </script>
    

    <!-- CSS local -->
    <link rel="stylesheet" type="text/css" href="css/principal.css"/>
    <link rel="stylesheet" type="text/css" href="css/lightbox.css"/>

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<?php include('includes/menu.php')?>
	

	<main id="content"  class="container">
		
		<header class="page-header">
			<h2> Fotos</h2>
		</header>
		<div id="gallery">
		<div class="row">
			<div class="col-md-3">
				<a href="<?php echo base_url(); ?>static/img/galeria-1.jpg" rel="lightbox[roadtrip]">
				<img src=<?php echo base_url(); ?>static/"img/galeria-1.jpg" alt="Grupo Camerata de violões brasilis na Pinacoteca de Santos"  class="img-responsive"></a>
			</div>
			<div class="col-md-3">
				<a href="<?php echo base_url(); ?>static/img/galeria-2.jpg" rel="lightbox[roadtrip]">
				<img src="<?php echo base_url(); ?>static/img/galeria-2.jpg" alt="Grupo Camerata de violões brasilis nas escadas da Pinacoteca de Santos"  class="img-responsive"></a>
			</div>
			<div class="col-md-3">
				<a href="<?php echo base_url(); ?>static/img/galeria-3.jpg" rel="lightbox[roadtrip]">
				<img src="<?php echo base_url(); ?>static/img/galeria-3.jpg" alt="Grupo Camerata de violões brasilis"  class="img-responsive"></a>
			</div>
			<div class="col-md-3">
				<a href="<?php echo base_url(); ?>static/img/galeria-4.jpg" rel="lightbox[roadtrip]">
				<img src="<?php echo base_url(); ?>static/img/galeria-4.jpg" alt="Grupo Camerata de violões brasilis"  class="img-responsive"></a>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3">
				<a href="<?php echo base_url(); ?>static/img/galeria-5.jpg" rel="lightbox[roadtrip]">
				<img src="<?php echo base_url(); ?>static/img/galeria-5.jpg" alt="Grupo Camerata de violões brasilis durante apresentação"  class="img-responsive"></a>
			</div>
			<div class="col-md-3">
				<a href="<?php echo base_url(); ?>static/img/galeria-6.jpg" rel="lightbox[roadtrip]">
				<img src="<?php echo base_url(); ?>static/img/galeria-6.jpg" alt="Equipe masculina do grupo Camerata de violões brasilis"  class="img-responsive"></a>
			</div>
			<div class="col-md-3">
				<a href="<?php echo base_url(); ?>static/img/galeria-13.jpg" rel="lightbox[roadtrip]">
				<img src="<?php echo base_url(); ?>static/img/galeria-13.jpg" alt="Grupo Camerata de violões brasilis"  class="img-responsive"></a>
			</div>
			<div class="col-md-3">
				<a href="<?php echo base_url(); ?>static/img/galeria-8.jpg" rel="lightbox[roadtrip]">
				<img src="<?php echo base_url(); ?>static/img/galeria-8.jpg" alt="Grupo Camerata de violões brasilis nas escadas da Pinacoteca de Santos"  class="img-responsive"></a>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3">
				<a href="<?php echo base_url(); ?>static/img/galeria-9.jpg" rel="lightbox[roadtrip]">
				<img src="<?php echo base_url(); ?>static/img/galeria-9.jpg" alt="Grupo Camerata de violões brasilis nas escadas da Pinacoteca de Santos"  class="img-responsive"></a>
			</div>
			<div class="col-md-3">
				<a href="<?php echo base_url(); ?>static/img/galeria-10.jpg" rel="lightbox[roadtrip]">
				<img src="<?php echo base_url(); ?>static/img/galeria-10.jpg" alt="Grupo Camerata de violões brasilis nas escadas da Pinacoteca de Santos"  class="img-responsive"></a>
			</div>
			<div class="col-md-3">
				<a href="<?php echo base_url(); ?>static/img/galeria-11.jpg" rel="lightbox[roadtrip]">
				<img src="<?php echo base_url(); ?>static/img/galeria-11.jpg" alt="Grupo Camerata de violões brasilis na Pinacoteca de Santos"  class="img-responsive"></a>
			</div>
			<div class="col-md-3">
				<a href="<?php echo base_url(); ?>static/img/galeria-12.jpg" rel="lightbox[roadtrip]">
				<img src="<?php echo base_url(); ?>static/img/galeria-12.jpg" alt="Grupo Camerata de violões brasilis na Pinacoteca de Santos"  class="img-responsive"></a>
			</div>
		</div>
		</div>
	</main>
	
	<?php include('includes/footer.php')?>