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

    <!-- include a theme -->


    <!-- Otros Estilos 
    <link rel="stylesheet" href="assets/css/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/fontawesome-free-5.10.1/css/all.css">
    <script defer src="fontawesome-free-5.10.1/js/all.js"></script>
    <script src="assets/Jquery/jquery-3.4.1.js"></script>-->
    <link rel="stylesheet" href="assets/css/Estilos.css">
    <!--<script defer src="assets/fontawesome-free-5.10.1/js/all.js"></script>-->
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

      <div class="Container-full"><!--container-full-->
        <header class="Title-main text-center"><!--ocupara el 100% en top-->
          <h1 style="padding-left: 15px;">Seleccion de tema de tesis</h1>
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
              <h3>
                Filtros
              </h3>
              <span>Filtros de busqueda de tesis</span>
            </div>

            <!--Temas Centrales-->
            <div class="panel text-left">
              <!--Click Panel-->
              <div>
                <h5 class="collapsed" aria-expanded="false" data-target="#panelOne" data-toggle="collapse">
                  Temas Centrales
                  <a class="collapsed indicator" aria-expanded="false" href="#panelOne" data-toggle="collapse">
                    <!--<i class="fas fa-caret-down" aria-hidden="true">
                    </i>-->
                    <i aria-hidden="true">▼</i>
                  </a>
                </h5>
              </div>

              <!--Content panel-->
              <div class="out collapse" id="panelOne" aria-expanded="false">
                <ul class="list-group">
                  <li class="list-group-item">
                    <div class="checkbox form-group">
                      <label>
                        <div class="checker">
                          <span>
                            <input name="TopicID[]" class="sort_rang TopicID" type="checkbox" value="1">
                          </span>
                        </div>
                        Internet de las cosas
                      </label>
                    </div>
                  </li>
                </ul>
              </div>
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
                    <i aria-hidden="true">▼</i>
                  </a>
                </h5>
              </div>

              <!--Content panel-->
              <div class="out collapse" id="panelTwo" aria-expanded="false">
                <ul class="list-group">
                  <li class="list-group-item">
                    <div class="checkbox form-group">
                      <label>
                        <div class="checker">
                          <span>
                            <input name="TopicID[]" class="sort_rang TopicID" type="checkbox" value="1">
                          </span>
                        </div>
                        Internet de las cosas
                      </label>
                    </div>
                  </li>
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
                    <i aria-hidden="true">▼</i>
                  </a>
                </h5>
              </div>

              <!--Content panel-->
              <div class="out collapse" id="panelThree" aria-expanded="false">
                <ul class="list-group">
                  <li class="list-group-item">
                    <div class="checkbox form-group">
                      <label>
                        <div class="checker">
                          <span>
                            <input name="TopicID[]" class="sort_rang TopicID" type="checkbox" value="1">
                          </span>
                        </div>
                        Internet de las cosas
                      </label>
                    </div>
                  </li>
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
                    <i aria-hidden="true">▼</i>
                  </a>
                </h5>
              </div>

              <!--Content panel-->
              <div class="out collapse" id="panelFour" aria-expanded="false">
                <ul class="list-group">
                  <li class="list-group-item">
                    <div class="checkbox form-group">
                      <label>
                        <div class="checker">
                          <span>
                            <input name="TopicID[]" class="sort_rang TopicID" type="checkbox" value="1">
                          </span>
                        </div>
                        Internet de las cosas
                      </label>
                    </div>
                  </li>
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
                    <i aria-hidden="true">▼</i>
                  </a>
                </h5>
              </div>

              <!--Content panel-->
              <div class="out collapse" id="panelFive" aria-expanded="false">
                <ul class="list-group">
                  <li class="list-group-item">
                    <div class="checkbox form-group">
                      <label>
                        <div class="checker">
                          <span>
                            <input name="TopicID[]" class="sort_rang TopicID" type="checkbox" value="1">
                          </span>
                        </div>
                        Internet de las cosas
                      </label>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </aside>

          <!--contenedor de las tesis-->
          <main class="container-full-body" style="float: left;">
            <div class="container full-tesis">
              <div class="row ml-1 mr-1 full-tesis">

                <!--Aqui inician las tesis-->
                <article class="mt-5 col-lg-4 col-md-6 col-sm-12 full-tesis">
                  <div class="conteiner-thesis">
                    <div class="Select-thesis-head">
                      <h3>Tesis</h3>
                      <span>Disponible</span>
                    </div>

                    <div class="Select-thesis-body">
                      <figure class="se-th-fi">
                        <a>
                          <img src="http://telematicanet.ucol.mx/Thesis-Selecter/content/tesis/9608_3747_logoplataformajpg.jpg" class="img-fluid img-thesis" alt="Responsive image">
                        </a>
                      </figure>
                    </div>

                    <div class="Select-thesis-footer pt-2">
                      <p class="thesis-name">
                        Plataforma Thesis-Selecter de la Universidad de Colima
                      </p>
         
                      <a class="btn btn-success btn-click">
                        Ver más
                        <i class="m-icon-swapright m-icon-white"></i>
                      </a>
                    </div>
                  </div>
                </article>

                <article class="mt-5 col-lg-4 col-md-6 col-sm-12 full-tesis">
                  <div class="conteiner-thesis">
                    <div class="Select-thesis-head">
                      <h3>Tesis</h3>
                      <span>Disponible</span>
                    </div>

                    <div class="Select-thesis-body">
                      <figure class="se-th-fi">
                        <a>
                          <img src="http://telematicanet.ucol.mx/Thesis-Selecter/content/tesis/9608_3747_logoplataformajpg.jpg" class="img-fluid img-thesis" alt="Responsive image">
                        </a>
                      </figure>
                    </div>

                    <div class="Select-thesis-footer pt-2">
                      <p class="thesis-name">
                        Plataforma Thesis-Selecter de la Universidad de Colima
                      </p>
         
                      <a class="btn btn-success btn-click">
                        Ver más
                        <i class="m-icon-swapright m-icon-white"></i>
                      </a>
                    </div>
                  </div>
                </article>

                <article class="mt-5 col-lg-4 col-md-6 col-sm-12 full-tesis">
                  <div class="conteiner-thesis">
                    <div class="Select-thesis-head">
                      <h3>Tesis</h3>
                      <span>Disponible</span>
                    </div>

                    <div class="Select-thesis-body">
                      <figure class="se-th-fi">
                        <a>
                          <img src="http://telematicanet.ucol.mx/Thesis-Selecter/content/tesis/9608_3747_logoplataformajpg.jpg" class="img-fluid img-thesis" alt="Responsive image">
                        </a>
                      </figure>
                    </div>

                    <div class="Select-thesis-footer pt-2">
                      <p class="thesis-name">
                        Plataforma Thesis-Selecter de la Universidad de Colima
                      </p>
         
                      <a class="btn btn-success btn-click">
                        Ver más
                        <i class="m-icon-swapright m-icon-white"></i>
                      </a>
                    </div>
                  </div>
                </article>
                <!--Aqui terminan las tesis-->
              </div>
            </div>
          </main>
        </div>
      </div>
    </div>

    <?php
      if ($atributos['uTipo'][0] == 'Estudiante')
      {
        include('assets/modals/Student/profile.php');
      }
      elseif ($atributos['uTipo'][0] == 'Trabajador') 
      {
        //nose que hace
      }
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
    <!--  -->
    <script src="assets/plugins/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="assets/js/home/Service.js" type="text/javascript"></script>
    <script src="assets/js/home/Controller.js" type="text/javascript"></script>
  </body>
</html>
