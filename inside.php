<?php
   require_once("assets/federacion/login.php");
   $atributos = $saml->getAttributes();
   $atributos['uTipo'][0] = 'Trabajador';


   if (!isset($_GET['thesis_id']))
   {
     header('Location: home.php?msg=1');
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
	            <li><a href="">Ver más</a></li>
			</ol>
        </div>
        <div id="sesion">

        </div>
     </div> <!--cierra path-->
    </section>
	<section class="page-header">
        <div class="container">
	        <h1 class="title-ucol">Thesis-Selecter</h1>
	    </div><!--/ Cierra .container /-->
    </section>
    <?php if ($atributos['uTipo'][0] == 'Estudiante')
    {
      include('assets/views/student/navbar.php');
    } elseif ($atributos['uTipo'][0] == 'Trabajador') {
      include('assets/views/researcher/navbar.php');
    }
    ?>


    <div class="container c-principal">
      <div class="col-md-12">
      </div>
		<div class="row p-contenido">
			<div class="col-xl-1 col-lg-4 col-md-4 col-xs-12 sidebar">

			</div>
			<!-- <div class="col-xl-9 col-lg-8 col-md-8 col-xs-12 main"> <--Con  contenido izquierdo o derecho uno de los dos
			<div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 main"> <--Pagina completa -->
			<div id="thesis" class="col-xl-10 col-lg-8 col-md-8 col-xs-12 main"><!--Con contenido izquierdo y derecho -->
        <table class="table table-striped table-hover">
    <tbody>
        <tr>
            <td colspan="2" style="text-align: center; ">
                <h2 id="ThesisName"></h2>
            </td>
        </tr>
        <tr>
            <td style="height:auto; width:100%; padding-top: 10px;" colspan="2" style="text-align: center;">
                <div class="row margin-bottom-10 margin-top-10">
                    <div style="justify-content: center; align-items: center; display: flex;" class="col-lg-4 col-lg-offset-4 gallery-item">
                        <a id="fotoZoom" data-rel="fancybox-button" title="" href="" class="fancybox-button">
                            <img id="Image" style="height: auto; width: auto;" alt="" class="img-responsive">
                            <div class="zoomix"><i class="fa fa-search"></i></div>
                        </a>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td width="34%"><h4><a  href="javascript:;">Temas Centrales:</a></h4></td>
            <td id="Topic"></td>
        </tr>
        <tr>
            <td><h4><a  href="javascript:;">Grupo de Investigación:</a></h4></td>
            <td id="ResearchGroup"></td>
        </tr>
        <tr>
            <td><h4><a  href="javascript:;">Línea de Investigación:</a></h4></td>
            <td id="ResearchLine"></td>
        </tr>
        <tr>
            <td><h4><a  href="javascript:;">Perfil de Estudiante:</a></h4></td>
            <td id="StudentProfile"></td>
        </tr>
        <tr>
            <td><h4><a  href="javascript:;">Tecnologías a utilizar:</a></h4></td>
            <td id="Tecnologies"></td>
        </tr>
        <tr>
            <td><h4><a  href="javascript:;">Número de alumnos requeridos:</a></h4></td>
            <td id="Plazas"></td>
        </tr>
        <tr>
            <td><h4><a  href="javascript:;">Número de alumnos aceptados:</a></h4></td>
            <td id="Accepted"></td>
        </tr>
        <tr>
            <td><h4><a  href="javascript:;">Nombre del asesor:</a></h4></td>
            <td id="ResearcherName"></td>
        </tr>
        <tr>
            <td><h4><a  href="javascript:;">E-mail del asesor:</a></h4></td>
            <td id="ResearcherEmail"></td>
        </tr>
        <tr>
            <td><h4><a  href="javascript:;">Universidad de adscripción del asesor:</a></h4></td>
            <td id="University"></td>
        </tr>
        <tr>
            <td><h4><a  href="javascript:;">Dependencia de adscripción del asesor:</a></h4></td>
            <td id="Work"></td>

        </tr>
        <tr>
            <td><h4><a  href="javascript:;">Edificio donde labora el asesor:</a></h4></td>
            <td id="Building"></td>
        </tr>
        <tr>
            <td><h4><a  href="javascript:;">Cubículo donde se encuentra el asesor:</a></h4></td>
            <td id="Room"></td>
        </tr>
        <tr>
            <td><h4><a  href="javascript:;">Curriculum Vitae del asesor:</a></h4></td>
            <td id="Cv"></td>
        </tr>
        <tr>
            <td><h4><a  href="javascript:;">Tipo de apoyo al alumno:</a></h4></td>
            <td id="Support"></td>
        </tr>
        <tr>
            <td><h4><a  href="javascript:;">Institución que apoya:</a></h4></td>
            <td id="FunddingAgency"></td>
        </tr>
    </tbody>
</table>
      <div class="row">
        <div class="col-lg-4 col-lg-offset-4 text-center" style="padding-top:40px;">
          <?php if ($atributos['uTipo'][0]!='Estudiante'): ?>
            <button type="submit" class="btn btn-danger" disabled>Solicitar tesis</button>
          <?php endif; ?>
          <?php if ($atributos['uTipo'][0]=='Estudiante'): ?>
            <button type="submit" onclick="#" class="btn btn-success">Solicitar tesis</button>
          <?php endif; ?>

              <button onclick="window.location.href='summary.php?thesis_id=<?php echo $_GET['thesis_id']; ?>'" class="btn btn-success">Ver resumen</button>
              <button type="button" onclick="window.location.href='home.php'" class="btn btn-default">Regresar</button>
        </div>
      </div>

			</div>
      <div class="col-xl-1 col-lg-4 col-md-4 col-xs-12 sidebar">

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
    <script src="assets/js/inside.js" type="text/javascript"></script>
    <script src="assets/plugins/Fancybox/source/jquery.fancybox.js" type="text/javascript"></script>



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
