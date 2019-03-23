<?php
   require_once("assets/federacion/login.php");
   $atributos = $saml->getAttributes();
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


  </head>
  <body>
	<div id="estructura">
	<!-- Fixed navbar -->
	<nav class="navbar navbar-light bg-faded theme-primary pos-f-t">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-xs-12">
					<button class="navbar-toggler hidden-md-up pull-right collapsed" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false">&#x2630;</button>			        <div class="collapse navbar-toggleable-sm" id="navbar-header">

			            <a class="navbar-brand" id="logo" href="//www.ucol.mx/">Universidad de Colima</a>
			            <span class="home-href"><a href="./"></a></span>
			            						   <!--<ul id="navlist" class="nav navbar-primary navbar-nav pull-md-right">
						   <li class="nav-item">
						      <a class="nav-link" data-hover="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
						         Opcion 1
						      </a>
						           <ul id="subnavlist" class="dropdown-menu">
						              <li><a href="#">Sub opcion 1</a></li>
						              <li><a href="#">Sub opcion 2</a></li>
						           </ul>
						   </li>
						   <li class="nav-item">
						      <a class="nav-link" href="#">
						         Opcion 2
						      </a>
						   </li>
						   <li class="nav-item">
						      <a class="nav-link" href="#">
						         Opcion 3
						      </a>
						   </li>
						</ul>-->
			        </div>
				</div>
			</div>
		</div>
    </nav> <!-- /navbar -->
        <section class="page-breadcrumb">
     <div class="container ">
     	<div id="path">
	        	<ol class="breadcrumb">
	            	<li>Usted está en:</li>
	            <li><a href="/">Inicio</a></li>
			</ol>
        </div>
        <div id="sesion">
	        	<ol class="breadcrumb">
	            	<li>Bienvenido(a):</li>
	            <li class="user-name"><?php echo $atributos["uNombre"][0]; ?></li>
	            <li><a href="assets/federacion/logout.php">Salir</a></li>
			</ol>
        </div>
     </div> <!--cierra path-->
    </section>
	<section class="page-header">
        <div class="container">
	        <h1 class="title-ucol">Thesis-Selecter</h1>
	    </div><!--/ Cierra .container /-->
    </section>
    <nav class="nav-sistema">
    		<button class="navbar-toggler hidden-md-up pull-right collapsed" type="button" data-toggle="collapse" data-target="#navbar-header2" aria-controls="navbar-header2" aria-expanded="false">☰</button>
		<div class="collapse navbar-toggleable-sm" id="navbar-header2">
	        <ul id="navlist" class="nav navbar-primary navbar-nav pull-md-right">
	            <li class="nav-item">
	                <a class="a1 nav-link" data-hover="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
	                    <div class="oIcono opcion1"></div>
	                    Opción 1
	                </a>
	                <!--[if gte IE 7]><!--><!--<![endif]--><!--[if lte IE 6]>
	                <table>
	                    <tr>
	                        <td>
	                            <![endif]-->
	                            <ul id="subnavlist" class="dropdown-menu">
	                                <li><a href="#">Sub-opción 1</a></li>
				                    <li><a href="#">Sub-opción 2</a></li>
				                    <li><a href="#">Sub-opción 3</a></li>
				                    <li><a href="#">Sub-opción 4</a></li>
	                            </ul>
	                            <!--[if lte IE 6]>
	                        </td>
	                    </tr>
	                </table>
	                </a><![endif]-->
	            </li>
	            <li class="nav-item">
	                <a class="a1 nav-link" data-hover="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
	                    <div class="oIcono opcion1"></div>
	                    Opción 2
	                </a>
	                <ul id="subnavlist" class="dropdown-menu">
	                    <li><a href="#">Sub-opción 1</a></li>
		                <li><a href="#">Sub-opción 2</a></li>
	                </ul>
	                <!--[if gte IE 7]><!--><!--<![endif]-->
	            </li>
	            <li class="nav-item">
	                <a class="a3 nav-link" href="plantillas.php">
	                    <div class="oIcono opcion3"></div>
	                    Opción 3
	                </a>
	                <!--[if gte IE 7]><!--><!--<![endif]-->
	            </li>
	        </ul>
	    </div>
	</nav>


    <div class="container c-principal">
      <div class="col-md-12" style="margin-bottom: 40px;">

      </div>
		<div class="row p-contenido">
			<div class="col-xl-2 col-lg-4 col-md-4 col-xs-12 sidebar">

			</div>
			<!-- <div class="col-xl-9 col-lg-8 col-md-8 col-xs-12 main"> <--Con  contenido izquierdo o derecho uno de los dos
			<div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 main"> <--Pagina completa -->
			<div id="thesis" class="col-xl-9 col-lg-8 col-md-8 col-xs-12 main"><!--Con contenido izquierdo y derecho -->
        <h1>Error</h1>
          <div class="search-result-item">
            <h2>Es posible que no tengas permisos</h2>
          </div>

			</div>
      <div class="col-xl-2 col-lg-4 col-md-4 col-xs-12 sidebar">

			</div>
		</div>
		<div class="row p-inferior">
			<div class="col-md-12 p-content"></div>
		</div>
	</div>

   </div>
    <footer class="bd-footer text-muted" style="margin-top:20px;"role="contentinfo">
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
</script>
    <!-- HTML5 shim y Respond.js para soporte IE8 de elementos HTML5 y media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--script>
        // Carousel Auto-Cycle
		$(document).ready(function() {
			//$('#navcontainer > #navlist').attr('data-spy','affix').attr('data-offset-top',100).attr('data-offset-bottom', 531);
			$('#sliderNaN>.rslides').responsiveSlides({auto:true,pager:true,nav:true,timeout:6000,speed:800});
			$(function () {
			  $('[data-toggle="tooltip"]').tooltip()
			})
		    $( '.form-search-ucol' ).click( function() {
				$( this ).addClass( 'active' );
			}).focusout( function() {
				$( this ).removeClass( 'active' );
			});
			$('#navcontainer > #navlist').affix({
			  offset: {
			    top: 100,
			    bottom: function () {
			      return (this.bottom = $('footer').outerHeight(true)+100)
			    }
			  }
			});
			var modWidth = $( '#navcontainer' ).width() - 30;
		    $( '#navlist' ).width( modWidth );
			jQuery( window ).resize( function () {
		        if ( jQuery( window ).width() ) {
			        var modWidth = $( '#navcontainer' ).width() - 30;
		           $( '#navlist' ).width( modWidth );
		        }
			});


		});
    </script-->
  </body>
</html>
