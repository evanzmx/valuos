<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Emanuel Martinez Avaluos</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/avaluos.css">
	<link rel="stylesheet" href="css/bjqs.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro|Open+Sans:300' rel='stylesheet' type='text/css'> 
	<link rel="stylesheet" href="css/demo.css">
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bjqs-1.3.min.js"></script>
</head>
<body>
	<div id="page-container" rol="page-container">
		<header id="main-header">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="navbar-container">
					<h1 class="navbar-brand sitetitle">Ávaluos</h1>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.html">Inicio</a></li>
					<li><a href="nosotros.html">¿Quienes somos?</a></li>
					<li class="active"><a href="servicios.html">Servicios</a></li>
					<li><a href="asesoria.html">Asesoria profesional</a></li>
					<li><a href="contacto.html">Contacto</a></li>
				</ul>
			</nav>
			<nav class="responsive-nav">
				<div class="navbar-container">
					<h1 class="navbar-brand sitetitle">Ávaluos</h1>
				</div>
				<span class="responsive-nav-button">Servicios <span class="glyphicon glyphicon-list"></span> </span>
				<ul class="responsive-nav-ul">
					<li class="active"><a href="index.html">Inicio</a></li>
					<li><a href="nosotros.html">¿Quienes somos?</a></li>
					<li><a href="servicios.html">Servicios</a></li>
					<li><a href="asesoria.html">Asesoria profesional</a></li>
					<li><a href="contacto.html">Contacto</a></li>
				</ul>
			</nav>
		</header>
		<section id="main-container" class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h2 class="pagetitle">¿Que servicios ofrecemos?</h2>
				<p class="normaltext">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>	
			</div>
			<div id="banner-fade">
		        <!-- start Basic Jquery Slider -->
		        <ul class="bjqs">
		          <li><img src="img/slide1.jpg" title="Servicio Avaluos"></li>
		          <li><img src="img/slide2.jpg" title="Servicio Avaluos"></li>
		          <li><img src="img/slide3.jpg" title="Servicio Avaluos"></li>
		          <li><img src="img/slide4.jpg" title="Servicio Avaluos"></li>
		        </ul>
		        <!-- end Basic jQuery Slider -->

		    </div>
		      <!-- End outer wrapper -->
		      <p class="normaltext">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
		</section>
		<footer id="main-footer">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<span class="sitetitle">Ávaluos</span>
					<p class="copy">2014 Todos los derechos reservados.</p>
					<p class="normaltext contactfooter"><b>Contacto:</b> <a href="mailto:info@avaluos.com">info@avaluos.com</a></a></p>
				</div>
			</div>
		</footer>
		<!--
		<footer id="main-footer" class="">
			<div class="row">
				<div class="col-md-4">
					<span class="sitetitle">Ávaluos</span>
					<p class="copy">2014 Todos los derechos reservados</p>
				</div>
				<div class="col-md-4">
					<h2>Servicios</h2>
					<p class="normaltext">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.
					</p>
				</div>
				<div class="col-md-4">
					<h2>Contacto</h2>
					<p class="normaltext">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.
					</p>
				</div>
			</div>
		</footer>
		-->
	</div>
	 <script class="secret-source">
        jQuery(document).ready(function($) {

		$('span.responsive-nav-button').click(function(){
			showMenu();
		});

          $('#banner-fade').bjqs({
            height      : 320,
            width       : 620,
            responsive  : true,
            showcontrols : false,
            showmarkers : false
          });

        });

	function showMenu(){
		if($('ul.responsive-nav-ul').is(':visible')){
			$('div.overlay-all').remove();
			$('ul.responsive-nav-ul').slideUp(200);
		}else{
			$('body').append('<div class="overlay-all" onclick="showMenu()"></div>');
			$('ul.responsive-nav-ul').slideDown(200);
		}
	}



      </script>
</body>
</html>