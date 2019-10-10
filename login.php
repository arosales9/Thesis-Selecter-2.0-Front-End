<?php
   require_once("assets/federacion/login.php");
   $atributos = $saml->getAttributes();
   //$atributos['uTipo'][0] = 'Trabajador'; // puedo canviar el valor Estudiante
   //echo '<script language="javascript">alert('.$atributos['uTipo'][0].');</script>'; 
   //echo $atributos['uTipo'][0];
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

    <!-- include a theme -->


    <!-- Otros Estilos 
    <link rel="stylesheet" href="assets/css/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/fontawesome-free-5.10.1/css/all.css">
    <script defer src="fontawesome-free-5.10.1/js/all.js"></script>
    <script src="assets/Jquery/jquery-3.4.1.js"></script>-->
    <link rel="stylesheet" href="assets/css/Estilos.css">
    <script defer src="assets/fontawesome-free-5.10.1/js/all.js"></script>
    

  </head>

  <body>
  	<div id="estructura">
    	<!-- Fixed navbar -->
    	<nav class="navbar navbar-light bg-faded theme-primary pos-f-t" >
    		<div class="container">
    			<div class="row">
    				<div class="col-xl-12 col-lg-12 col-md-12 col-xs-12">
    					<button class="navbar-toggler hidden-md-up pull-right collapsed" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false">&#x2630;
              </button>			        
              <div class="collapse navbar-toggleable-sm" id="navbar-header">
                <a class="navbar-brand" id="logo" href="//www.ucol.mx/">Universidad de Colima</a>
                <span class="home-href"><a href="./"></a></span>
    			    </div>
    				</div>
    			</div>
    		</div>
      </nav> 
      <!-- /navbar -->

      <section class="page-breadcrumb">
        <div class="container ">
         	<div id="path">
            <ol class="breadcrumb">
              <li>Usted está en:</li>
              <li><a href="">Login</a></li>
            </ol>
          </div>
          <div id="sesion">
          </div>
        </div>
      </section>
      <!--cierra path-->
    	
      <section class="page-header" >
        <div class="container">
          <h1 class="title-ucol">Thesis-Selecter</h1>
        </div>
      </section>
      <!--/ Cierra .container Titulo /-->

      <!--/ Muestra vistas del usuario dependiendo /-->
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
    </div>

    <div class="container" style="background: white">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-sm-12 col-md-6 mt pt " style="background: white; text-align: center;">
          <h1>Iniciar sesión</h1>
          <br>
          <form class="form-signin">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label><br>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <br>
            <a data-toggle="modal" data-target="#exampleModal">Registrar Asesor</a>
            <br>

            <button class="btn btn-lg btn-success btn-block" type="submit" style="margin-top:  15px;">Sign in</button>
          </form>
        </div>

        <div class="col-sm-12 col-md-3 mt" style="background: white">
          <div class="container">
            <div class="row">
              <div class="col">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registrar Asesor</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <!-- BEGIN CONTENT -->
            <div class="row margin-bottom-20">
              <form action="register.php" enctype="multipart/form-data" class="form-horizontal form-without-legend"  method="post">
                <div class="form-group col-sm-12">
                  <label for="registerName" class="col-lg-4 control-label">Nombre(s): <span class="require">*</span></label>
                  <div class="col-lg-8">
                      <input type="text" class="form-control" id="registerName" name="registerName" required="required">
                  </div>
                </div>

                <div class="form-group col-sm-12">
                  <label for="registerAP" class="col-lg-4 control-label">Apellido Paterno: <span class="require">*</span></label>
                   <div class="col-lg-8">
                      <input type="text" class="form-control" id="registerAP" name="registerAP" required="required">
                  </div>
                </div>

                <div class="form-group col-sm-12">
                  <label for="registerAM" class="col-lg-4 control-label">Apellido Materno: <span class="require">*</span></label>
                  <div class="col-lg-8">
                      <input type="text" class="form-control" id="registerAM" name="registerAM" required="required">
                  </div>
                </div>

                <div class="form-group col-sm-12">
                  <label for="email" class="col-lg-4 control-label">Correo electrónico: <span class="require">*</span></label>
                  <div class="col-lg-8">
                    <input type="email" class="form-control" id="email" name="email" pattern=".+@ucol.mx" required="required">
                  </div>
                </div>

                <div class="form-group col-sm-12">
                  <label for="telephoneNumber" class="col-lg-4 control-label">Telefono: <span class="require">*</span></label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" id="telephoneNumber" name="telephoneNumber" required="required">
                  </div>
                </div>

                <div id="buildingDiv" class="form-group col-sm-12">
                  <label for="building" class="col-lg-4 control-label">Edificio: <span class="require">*</span></label>
                  <div class="col-lg-8">
                    <select class="form-control" id="building" name="building" required="required"></select>
                    <font>Si no encontró el Edificio, agregue una nueva  <a href="" data-toggle="modal"  data-target="#newBuilding">aquí</a> </font>
                  </div>
                </div>

                <div id="roomDiv" class="form-group col-sm-12">
                  <label for="room" class="col-lg-4 control-label">Cubiculo: <span class="require">*</span></label>
                  <div class="col-lg-8">
                    <select class="form-control" id="room" name="room" required="required"></select>
                    <font>Si no encontró el Cubiculo, agregue una nueva  <a href="" data-toggle="modal"  data-target="#newRoom">aquí</a> </font>
                  </div>
                </div>

                <div class="form-group col-sm-12">
                  <label for="addProfilePicture" class="col-lg-4 control-label">Foto de perfil (jpeg): <span class="require">*</span></label>
                  <div class="col-lg-8 div-input">
                    <input id="addThesisPicture" name="addProfilePicture" required="required" type="file" class="filestyle" data-text="Explorar" accept="image/jpeg">                      
                  </div>
                </div>

                <div id="lineDiv" class="form-group col-sm-12">
                  <label for="line" class="col-lg-4 control-label">Línea de investigación: <span class="require">*</span></label>
                  <div class="col-lg-8">
                  <select class="form-control" id="line" name="line" required="required"></select>
                    <font>Si no encontró su Línea de investigación, agregue una nueva  <a href="" data-toggle="modal"  data-target="#newLine">aquí</a> </font>
                  </div>
                </div>

                <div id="groupDiv" class="form-group col-sm-12">
                  <label for="group" class="col-lg-4 control-label">Grupo de investigación: <span class="require">*</span></label>
                  <div class="col-lg-8">
                    <select class="form-control" id="group" name="group" required="required"></select>
                    <font>Si no encontró su Grupo de investigación, agregue uno nueva  <a href="" data-toggle="modal"  data-target="#newGroup">aquí</a> </font>
                  </div>
                </div>

                <div class="form-group col-sm-12">
                  <label for="cv" class="col-lg-4 control-label">Link de Curriculum Vitae: <span class="require">(Opcional)</span></label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" id="cv" name="cv">
                  </div>
                </div>

                <div class="form-group col-sm-12">
                  <label for="newPwd" class="col-lg-4 control-label">Nueva contraseña: <span class="require">*</span></label>
                  <div class="col-lg-8">
                    <input type="password" class="form-control" id="newPwd" name="newPwd" required="required">
                  </div>
                </div>

                <div class="form-group col-sm-12">
                  <label for="confPwd" class="col-lg-4 control-label">Confirmar nueva contraseña: <span class="require">*</span></label>
                  <div class="col-lg-8">
                    <input type="password" class="form-control" id="confPwd" name="confPwd" required="required">
                  </div>
                </div>

                <div class="row text-right col-sm-12">
                  <!--<button type="button" class="btn btn-secondary" onclick="location.href = 'index.php'">Cerrar</button>-->
                </div>
                <div class="modal-footer">
                  <button id="add" type="submit" class="btn btn-success">Aplicar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>



    <?php
      /*if ($atributos['uTipo'][0] == 'Estudiante')
      {
        include('assets/modals/Student/profile.php');
      }
      elseif ($atributos['uTipo'][0] == 'Trabajador') 
      {
        //nose que hace
      }*/
    ?>

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
    <script src="assets/js/home/Service.js" type="text/javascript"></script>
    <!--<script src="assets/js/home/Controller.js" type="text/javascript"></script>-->
  </body>
</html>
