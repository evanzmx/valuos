<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Emanuel Martinez Avaluos</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/avaluos.css">
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div id="page-container" rol="page-container">
		<header id="main-header">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="navbar-container">
					<h1 class="navbar-brand sitetitle">Ávaluos</h1>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Inicio</a></li>
					<li class="active"><a href="nosotros.php">¿Quienes somos?</a></li>
					<li><a href="servicios.php">Servicios</a></li>
					<li><a href="asesoria.php">Asesoria profesional</a></li>
					<li><a href="contacto.php">Contacto</a></li>
				</ul>
			</nav>
			<nav class="responsive-nav">
				<div class="navbar-container">
					<h1 class="navbar-brand sitetitle">Ávaluos</h1>
				</div>
				<span class="responsive-nav-button">Nosotros <span class="glyphicon glyphicon-list"></span> </span>
				<ul class="responsive-nav-ul">
					<li class="active"><a href="index.php">Inicio</a></li>
					<li><a href="nosotros.php">¿Quienes somos?</a></li>
					<li><a href="servicios.php">Servicios</a></li>
					<li><a href="asesoria.php">Asesoria profesional</a></li>
					<li><a href="contacto.php">Contacto</a></li>
				</ul>
			</nav>
		</header>
		<section id="main-container" class="container">
			<h2 class="pagetitle">¿Quienes somos?</h2>
			<img src="img/quienes_somos.jpg" class="left-side" alt="Quienes somos" title="Emanuel Martinez Avaluos">
			<p class="normaltext">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<p class="normaltext">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<h3 class="sibtitles">Misión</h3>
			<img class="squarebanner" src="img/banner.png" alt="Solicita un avaluo" title="Solicita un avaluo">
			<p class="normaltext">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<h3 class="sibtitles">Visión</h3>
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
	<script type="text/javascript">
	$(function(){
		$('span.responsive-nav-button').click(function(){
			showMenu();
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