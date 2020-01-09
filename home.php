<?php
   require_once("assets/federacion/login.php");
   $atributos = $saml->getAttributes();
   $atributos['uTipo'][0] = 'Trabajador'; // puedo canviar el valor Estudiante o Trabajador
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
    <link rel="stylesheet" href="assets/css/cargando.css">
    <link rel="stylesheet" href="assets/css/Filtros.css">
    <link rel="stylesheet" href="assets/css/Estilos.css">
    <!-- include a theme -->


    <!-- Otros Estilos -->
    <script>
       //<![CDATA[
      document.cookie = 'cross-site-cookie=bar; SameSite=None; Secure';
       //]]>
    </script>
  </head>

  <body>
    <div id="estructura" style="margin-bottom: 80px;">
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
              <li>Usted está en Anthony prueba:</li>
              <li><a href="">Inicio</a></li>
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

      <div><!--container-full-->
        <header class="Title-main text-center"><!--ocupara el 100% en top-->
          <h1 class="h1-title">Seleccion de tema de tesis</h1>
          <div class="subtitle-main">
            <p>
              Descubre tu tesis ideal a través de esta página web, la cual te permite seleccionar dinámicamente el tema de tesis de grado de acuerdo a tus intereses académicos (tema central, grupo de investigación, línea de investigación, perfil del estudiante, asesor, etc).
            </p>
          </div>
        </header>

        <div class="line">
        </div>

        <div class="container full-tesis">


          <aside class="filters-menu">
            <!--Encabezado de los filtros-->
            <div class="filters-menu-title">
              <h3 class="text-white" style="color: white !important;">
                Filtros
              </h3>
              <span>Filtros de busqueda de tesis</span>
            </div>

            <!--Grupo de investigacion-->
            <div class="panel text-left">
              <!--Click Panel-->
              <div>
                <h5 class="pl-2 collapsed" aria-expanded="false" data-target="#panelTwo" data-toggle="collapse">
                  Grupo de investigacion
                  <a class="collapsed indicator" aria-expanded="false" href="#panelTwo" data-toggle="collapse">
                    <!--<i class="fas fa-caret-down" aria-hidden="true">
                    </i>-->
                    <i id="x1" aria-hidden="true">▼</i>
                  </a>
                </h5>
              </div>

              <!--Content panel-->
              <div class="out collapse" id="panelTwo" aria-expanded="false">
                <ul class="list-group" id="filtersGroup">

                </ul>
              </div>
            </div>

            <!--Linea de investigacion-->
            <div class="panel text-left">
              <!--Click Panel-->
              <div>
                <h5 class="pl-2 collapsed" aria-expanded="false" data-target="#panelThree" data-toggle="collapse">
                  Linea de investigacion
                  <a class="collapsed indicator" aria-expanded="false" href="#panelThree" data-toggle="collapse">
                    <!--<i class="fas fa-caret-down" aria-hidden="true">
                    </i>-->
                    <i id="x2" aria-hidden="true">▼</i>
                  </a>
                </h5>
              </div>

              <!--Content panel-->
              <div class="out collapse" id="panelThree" aria-expanded="false">
                <ul class="list-group" id="filtersLine">

                </ul>
              </div>
            </div>

            <!--Perfil del estudiante-->
            <div class="panel text-left">
              <!--Click Panel-->
              <div>
                <h5 class="pl-2 collapsed" aria-expanded="false" data-target="#panelFour" data-toggle="collapse">
                  Perfil del estudiante
                  <a class="collapsed indicator" aria-expanded="false" href="#panelFour" data-toggle="collapse">
                    <!--<i class="fas fa-caret-down" aria-hidden="true">
                    </i>-->
                    <i id="x3" aria-hidden="true">▼</i>
                  </a>
                </h5>
              </div>

              <!--Content panel-->
              <div class="out collapse" id="panelFour" aria-expanded="false">
                <ul class="list-group" id="filtersStudent">

                </ul>
              </div>
            </div>

            <!--Asesor-->
            <div class="panel text-left">
              <!--Click Panel-->
              <div>
                <h5 class="pl-2 collapsed" aria-expanded="false" data-target="#panelFive" data-toggle="collapse">
                  Asesor
                  <a class="collapsed indicator" aria-expanded="false" href="#panelFive" data-toggle="collapse">
                    <!--<i class="fas fa-caret-down" aria-hidden="true">
                    </i>-->
                    <i id="x4" aria-hidden="true">▼</i>
                  </a>
                </h5>
              </div>

              <!--Content panel-->
              <div class="out collapse" id="panelFive" aria-expanded="false">
                <ul class="list-group" id="Researcher">

                </ul>
              </div>
            </div>

          </aside>

          <!--contenedor de las tesis-->
          <main class="container-full-body">
            <div class="container full-tesis">
              <div class="row full-tesis" id="thesis">
              </div>
            </div>
          </main>
        </div>
      </div>
    </div>

    <?php
      require_once('assets/modals/Advisors/perfilasesor.php');
      if ($atributos['uTipo'][0] == 'Estudiante')
      {
        include('assets/modals/Student/profile.php');
      }
      elseif ($atributos['uTipo'][0] == 'Trabajador') 
      {
        //nose que hace
      }
    ?>

    <div class="modal" id="md-cargando" aria-hidden="true" style="width: 100%; height: 100%; background: white;">
      <div>
        <div id="contenedor">
          <div class="loader" id="loader"></div>
          <div style="text-align: center; font: 150% sans-serif; padding-left: 10px; color: #669933;"><h3>Cargando recursos...</h3></div>
        </div>
      </div>
    </div>

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
    <!--  -->
    <script src="assets/plugins/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="assets/js/home/Service.js" type="text/javascript"></script>
    <script src="assets/js/home/Controller.js" type="text/javascript"></script>
  </body>
</html>
