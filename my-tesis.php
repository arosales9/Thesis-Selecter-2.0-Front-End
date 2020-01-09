<?php
   require_once("assets/federacion/login.php");
   $atributos = $saml->getAttributes();
   $atributos['uTipo'][0] = 'Trabajador';

   if ($atributos['uTipo'][0] != 'Trabajador') {
     header('Location: home.php');
   }


?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- meta tags requeridos -->
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<meta name="author" content="Universidad de Colima"/>
		<meta http-equiv="x-ua-compatible" content="ie=edge"/>
		<meta property="og:type" content="website"/>
		<meta property="og:description" content="Universidad de Colima"/>
		<meta property="og:image" content="http://wayf.ucol.mx/ucol_mini.png"/>
		<meta property="og:locale:alternate" content="es_ES" />
		<meta property="og:site_name" content="Universidad de Colima" />

		<!-- Titulo principal -->
		<title>Universidad de Colima</title>
		<!-- link requeridos -->
		<link href="http://wayf.ucol.mx/ucol_mini.png" rel="image_src" />
		<link href="//www.ucol.mx/cms/img/favicon.ico" type="image/x-icon" rel="icon" />
		<!-- jQuery -->
		<script src="//www.ucol.mx/cms/beta/js/jquery.min.js"></script>
		<!-- Bootstrap y header & footer agregados -->
		<link href="//www.ucol.mx/cms/headerfooterapp2.css" rel="stylesheet">
		<link href="//www.ucol.mx/cms/beta/css/carrusel.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/style.css">
		<link href="assets/plugins/Fancybox/source/jquery.fancybox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/gallery.css">

		<link rel="stylesheet" href="assets/css/Estilos.css">
	</head>
  	<body>
		<div id="estructura">
			<!-- Fixed navbar -->
			<nav class="navbar navbar-light bg-faded theme-primary pos-f-t">
				<div class="container">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-xs-12">
							<button class="navbar-toggler hidden-md-up pull-right collapsed" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false">&#x2630;
							</button>			        

							<div class="collapse navbar-toggleable-sm" id="navbar-header">
					            <a class="navbar-brand" id="logo" href="//www.ucol.mx/">
					            	Universidad de Colima
					            </a>
					            <span class="home-href">
					            	<a href="./">
					            	</a>
					            </span>
					        </div>
						</div>
					</div>
				</div>
		    </nav> 
		    <!-- navbar fin -->

		    <section class="page-breadcrumb">
			    <div class="container ">
			     	<div id="path">
				        	<ol class="breadcrumb">
				            	<li>Usted está en:</li>
				            <li><a href="">Mis tesis</a></li>
						</ol>
			        </div>
			        <div id="sesion">

			        </div>
			    </div> 
			    <!--cierra path-->
		    </section>

			<section class="page-header">
		        <div class="container">
			        <h1 class="title-ucol">Thesis-Selecter</h1>
			    </div><!--/ Cierra .container /-->
		    </section>

		    <?php 
		    	require_once('assets/modals/Advisors/perfilasesor.php');
		    	require_once('assets/modals/Advisors/createtesis.php');
		    	if ($atributos['uTipo'][0] == 'Estudiante')
			    {
			      include('assets/views/student/navbar.php');
			    } 
			    elseif ($atributos['uTipo'][0] == 'Trabajador') 
			    {
			      include('assets/views/researcher/navbar.php');
			    }
		    ?>

		    <!-- Contenedor de tesis -->
		    <div class="container">
		    	<div class="row">
		    		<div class="col-xl-10 col-lg-10 col-md-8 col-sm-6 col-xs-12">
				       	<h1 >Mis Tesis</h1>
				       	<!--  -->
				    </div>

				    <div class=" col-xl-1 col-lg-2 col-md-4 col-sm-6 col-xs-12" style="margin-left: 50px;">
				       	<button type="button" class="btn btn-success" name="button" 
				        data-toggle="modal" data-target="#exampleModal">
				        	Agregar Tesis
				        </button>
				    </div>
		    	</div>
				<div class="line" style="margin-top: 15px;">
        		</div>
		    	<div class="row">
					<main class="container">
		            	<div class="container full-tesis">
			              	<div class="row full-tesis" id="thesis">
							  	<!-- Tesis -->
			              	</div>
		            	</div>
		          	</main>
		    	</div>
			</div>
			<!-- Contenedor de tesis fin-->
	   	</div>
	    <footer class="bd-footer text-muted" style="margin-top:200px; bottom: 0;"role="contentinfo">
		    <div class="container">
			    <div class="row">
				    <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 center-links">
					    <img src="//www.ucol.mx/cms/beta/img/icon/ubicacion.svg" width="20"> Direcci&oacute;n: Av. Universidad No. 333, Las V&iacute;boras; CP 28040 Colima, Colima, M&eacute;xico
				    </div>
				    <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 center-links">
					    &copy; Derechos Reservados 2018-2021 Universidad de Colima
				    </div>
			    </div>
		    </div>
		</footer>

	    <!-- JS Bootstrap -->
	    <script src="//www.ucol.mx/cms/beta/dist/js/tether.min.js" type="text/javascript"></script>
	    <script src="//www.ucol.mx/cms/beta/dist/js/bootstrap.min.js" type="text/javascript"></script>
	    <script src="//www.ucol.mx/cms/beta/dist/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
	    <!-- JS adds -->
	    <script src="//www.ucol.mx/cms/beta/js/jquery.slides.js" type="text/javascript"></script>
	    <script src="//www.ucol.mx/cms/beta/js/carruselV3.2.js" type="text/javascript"></script>
	    <script src="//www.ucol.mx/cms/beta/js/jquery.flexisel0815.js" type="text/javascript"></script>
	    <script src="//www.ucol.mx/cms/beta/js/purl.js"></script>
	    <script src="//www.ucol.mx/cms/beta/js/custom.min.js" type="text/javascript"></script>
	    <script src="//www.ucol.mx/cms/js/custom.js" type="text/javascript"></script>
	    <script src="assets/js/my-tesis/Service.js" type="text/javascript"></script>
	    <script src="assets/js/my-tesis/Controller.js" type="text/javascript"></script>
	    <script src="assets/plugins/sweetalert2/dist/sweetalert2.all.min.js"></script>
  	</body>
</html>
