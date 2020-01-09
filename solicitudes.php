<?php
   require_once("assets/federacion/login.php");
   $atributos = $saml->getAttributes();
   $atributos['uTipo'][0] = 'Trabajador';
   if ($atributos['uTipo'][0] != 'Trabajador') {
     header('Location: home.php?msg=3');
     // code...
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
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/Estilos.css">
  </head>
  <body>
	<div id="estructura">
	<!-- Fixed navbar -->
	<nav class="navbar navbar-light bg-faded theme-primary pos-f-t">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-xs-12">
					<button class="navbar-toggler hidden-md-up pull-right collapsed" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false">&#x2630;</button>			        
            <div class="collapse navbar-toggleable-sm" id="navbar-header">
              <a class="navbar-brand" id="logo" href="//www.ucol.mx/">Universidad de Colima</a>
			          <span class="home-href"><a href="./"></a></span>
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
	            <li><a href="">Mis tesis</a></li>
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
      <div class="col-xl-12 col-lg-12 col-md-8 col-sm-6 col-xs-12">
        <h1>Solicitudes</h1>
      </div>

      <br><br><br>
		<div class="row p-contenido" style="">
      <div id="thesis" class="col-xl-12 col-lg-12 col-md-8 col-xs-12 main"><!--Con contenido izquierdo y derecho -->
      <div id="accordion">
  <div class="card">
    <div class="card-header" style="height: 55px;" id="headingOne">
        <button class="btn btn-link btn-sm" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          En Proceso
        </button>
      </h5>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <table class="table table-hover" id="dev-table">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col" width="20%">Tesis</th>
                  <th scope="col">Alumno</th>
                  <th scope="col">Correo electrónico</th>
                  <th scope="col">Facultad</th>
                  <th scope="col">Carrera</th>
                  <th width="13%">Acciones</th>
                </tr>
            </thead>
            <tbody id="proccessRequest">

            </tbody>
        </table>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" style="height: 55px;" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed btn-sm" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Aceptadas
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <table class="table table-hover" id="dev-table">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col" width="20%">Tesis</th>
                  <th scope="col">Alumno</th>
                  <th scope="col">Correo electrónico</th>
                  <th scope="col">Facultad</th>
                  <th scope="col">Carrera</th>
                  <th width="13%">Acciones</th>
                </tr>
            </thead>
            <tbody id="acceptedRequest">

            </tbody>
        </table>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" style="height: 55px;" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed btn-sm" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Rechazadas
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        <table class="table table-hover" id="dev-table">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col" width="20%">Tesis</th>
                  <th scope="col">Alumno</th>
                  <th scope="col">Correo electrónico</th>
                  <th scope="col">Facultad</th>
                  <th scope="col">Carrera</th>
                  <th width="13%">Acciones</th>
                </tr>
            </thead>
            <tbody id="rejectRequest">

            </tbody>
          </table>

        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" style="height: 55px;" id="headingFour">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed btn-sm" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Inhabilitado
          </button>
        </h5>
      </div>
      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
        <div class="card-body">
          <table class="table table-hover" id="dev-table">
              <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col" width="20%">Tesis</th>
                    <th scope="col">Alumno</th>
                    <th scope="col">Correo electrónico</th>
                    <th scope="col">Facultad</th>
                    <th scope="col">Carrera</th>
                  </tr>
              </thead>
              <tbody id="prohibidoRequest">

              </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>

	</div>
		<div class="row p-inferior">
			<div class="col-md-12 p-content"></div>
		</div>
	</div>
  <?php
    require_once('assets/modals/Advisors/perfilasesor.php');
  ?>
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
    <script src="assets/js/request/Service.js" type="text/javascript"></script>
    <script src="assets/js/request/Controller.js" type="text/javascript"></script>
    <script src="assets/plugins/sweetalert2/dist/sweetalert2.all.min.js"></script>
  </body>
</html>
