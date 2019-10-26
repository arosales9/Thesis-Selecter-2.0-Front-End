<?php
   require_once("assets/federacion/login.php");
   $atributos = $saml->getAttributes();
   $atributos['uTipo'][0] = 'Trabajador';

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
        <div id="estructura" class="es-min">
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

            <?php 
                if ($atributos['uTipo'][0] == 'Estudiante')
                {
                  include('assets/views/student/navbar.php');
                } 
                elseif ($atributos['uTipo'][0] == 'Trabajador') 
                {
                  include('assets/views/researcher/navbar.php');
                }
            ?>


            <div class="container-ver-mas">
                <div class="sub-container">
                    <table class="table table-striped table-hover" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="2">
                                    <h2 id="ThesisName" class="ttle">
                                    </h2>
                                </th>
                            </tr>

                            <tr>
                                <th class="text-center" colspan="2">
                                    <div class="row con-img">
                                        <div class="col gallery-item">
                                            <a id="fotoZoom" data-rel="fancybox-button" href="" class="fancybox-button">
                                                <img id="Image" class="img-responsive">
                                                <div class="zoomix"><i class="fa fa-search"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <th scope="row" style="width: 310px"><h5>Temas Centrales:</h5></th>
                                <td id="Topic"></td>
                            </tr>

                            <tr>
                                <th scope="row"><h5>Grupo de Investigación:</h5></th>
                                <td id="ResearchGroup"></td>
                            </tr>

                            <tr>
                                <th scope="row"><h5>Línea de Investigación:</h5></th>
                                <td id="ResearchLine"></td>
                            </tr>

                            <tr>
                                <th scope="row"><h5>Perfil de Estudiante:</h5></th>
                                <td id="StudentProfile"></td>
                            </tr>

                            <tr>
                                <th scope="row"><h5>Nivel:</h5></th>
                                <td id="Level"></td>
                            </tr>

                            <tr>
                                <th scope="row"><h5>D.E.S::</h5></th>
                                <td id="Des"></td>
                            </tr>

                            <tr>
                                <th scope="row"><h5>Tecnologías a utilizar:</h5></th>
                                <td id="Tecnologies"></td>
                            </tr>

                            <tr>
                                <th scope="row"><h5>Número de alumnos requeridos:</h5></th>
                                <td id="Plazas"></td>
                            </tr>

                            <tr>
                                <th scope="row"><h5>Número de alumnos aceptados:</h5></th>
                                <td id="Accepted"></td>
                            </tr>

                            <tr>
                                <th scope="row"><h5>Nombre del asesor:</h5></th>
                                <td id="ResearcherName"></td>
                            </tr>

                            <tr>
                                <th scope="row"><h5>E-mail del asesor:</h5></th>
                                <td id="ResearcherEmail"></td>
                            </tr>

                            <tr>
                                <th scope="row"><h5>Universidad de adscripción del asesor:</h5></th>
                                <td id="University"></td>
                            </tr>

                            <tr>
                                <th scope="row"><h5>Unidad Académica:</h5></th>
                                <td id="Work"></td>
                            </tr>

                            <tr>
                                <th scope="row"><h5>Edificio donde labora el asesor:</h5></th>
                                <td id="Building"></td>
                            </tr>

                            <tr>
                                <th scope="row"><h5>Cubículo donde se encuentra el asesor:</h5></th>
                                <td id="Room"></td>
                            </tr>

                            <tr>
                                <td scope="row"><h5>Curriculum Vitae del asesor:</h5></td>
                                <td id="Cv"></td>
                            </tr>
                                    
                            <tr>
                                <td scope="row"><h5>Tipo de apoyo al alumno:</h5></td>
                                <td id="Support"></td>
                            </tr>
                                    
                            <tr>
                                <td scope="row"><h5>Institución que apoya:</h5></td>
                                <td id="FunddingAgency"></td>
                            </tr>
                        </tbody>
                    </table>


                    <div class="row">
                        <div class="text-center col">
                            <div class="centrar-elements">
                                <?php if ($atributos['uTipo'][0]!='Estudiante'): ?>
                                <button type="submit" class="btn btn-danger wd-btn" disabled>Solicitar tesis</button>
                                <?php endif; ?>
                                        
                                <?php if ($atributos['uTipo'][0]=='Estudiante'): ?>
                                    <span id="studentBtn" class="wd-btn"></span>
                                <?php endif; ?>

                                <button onclick="window.location.href='summary.php?thesis_id=<?php echo $_GET['thesis_id']; ?>'" class="btn btn-success wd-btn">Ver resumen</button>
                                <button type="button" onclick="window.location.href='home.php'" class="btn btn-default wd-btn">Regresar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php 
            include('assets/modals/Student/sendRequest.php');
        ?>

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
        <script src="assets/plugins/sweetalert2/dist/sweetalert2.all.min.js"></script>
        <script src="assets/js/inside/Service.js" type="text/javascript"></script>
        <script src="assets/js/inside/Controller.js" type="text/javascript"></script>
        <script src="assets/plugins/Fancybox/source/jquery.fancybox.js" type="text/javascript"></script>
    </body>
</html>
