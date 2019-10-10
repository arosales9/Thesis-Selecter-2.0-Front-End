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

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      modal 1
    </button>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal">
      <div style="width: 80%; height: auto; background: white; margin: 0 auto; margin-top: 2.5%; margin-bottom: 25px;">
        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h1 class="modal-title" id="exampleModalLabel">Modal title</h1>
        </div>

        <div class="modal-body">
          <form id="formRegistroTesis" action="Pruebas.php" method="post">

            <div class="form-group">
              <label for="nomTesis" style="padding-left: 3px;"><h4>Nombre de tesis:</h4></label>
              <input type="text" class="form-control" id="nomTesis">
            </div>

            <div class="form-group">
              <label for="exaFile" style="padding-left: 3px;"><h4>Temas centrales(Max 4):</h4></label>
              <select class="form-control" id="almReq" style="width: 100% !important;">
                <option>Ninguna seleccion</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
              <span>Si no encuentra tema, agregue uno nuevo <a href="">aqui</a></span>
            </div>

            <div class="form-group">
              <label for="almReq" style="padding-left: 3px;"><h4>Alumnos requeridos:</h4></label>
              <select class="form-control" id="almReq">
                <option>Ninguna seleccion</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div>

            <div class="form-group">
              <label for="perEst" style="padding-left: 3px;"><h4>Perfil de Estudiante:</h4></label>
              <select class="form-control" id="perEst">
                <option>Ninguna seleccion</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div>

            <div class="form-group">
              <label for="tecUtil" style="padding-left: 3px;"><h4>Tecnologias a utilizar:</h4></label>
              <select class="form-control" id="tecUtil">
                <option>Ninguna seleccion</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
              <span>Si no encuentra la tecnologia reuerida, agregue uno nuevo <a href="">aqui</a></span>
            </div>

            <div class="form-group">
              <label for="intsApo" style="padding-left: 3px;"><h4>Institucion que apoya:</h4></label>
              <select class="form-control" id="intsApo">
                <option>Ninguna seleccion</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
              <span>Si no encontro la intitución, agregue una nueva <a href="#">aquí</a></span>
            </div>

            <div class="form-group">
              <label for="tipAp" style="padding-left: 3px;"><h4>Tipo de apoyo(Max 4):</h4></label>
              <select class="form-control" id="tipAp">
                <option>Ninguna seleccion</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
              <span>Si no encontro el tipo de apoyo, agregue uno nuevo <a href="">aqui</a></span>
            </div>

            <div class="form-group">
              <label for="imgTes" style="padding-left: 3px;"><h4>Imagen(JPEG):</h4></label>
              <input type="file" class="form-control-file" id="imgTes">
            </div>

            <div class="form-group">
              <label for="resumen"><h4>Resumen(50-150 palabras):</h4></label>
              <textarea class="form-control" id="resumen" rows="5"></textarea>
            </div>

          </form>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" form="formRegistroTesis">Save changes</button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
            modal 2
          </button>
        </div>
      </div>
    </div>

    <div class="modal fade x1" id="exampleModal1">
      <div style="width: 100%; height: 100%; background: red; padding-left: 16px !important;">
        <div class="colorEspecial">
          
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h1 class="modal-title" id="exampleModalLabel">Modal title 2</h1>
          </div>

          <div class="modal-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" form="formRegistroTesis">Save changes</button>
          </div>
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
    <!-- Links  
    <script src="assets/plugins/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="assets/js/home/Service.js" type="text/javascript"></script>
    <script src="assets/js/home/Controller.js" type="text/javascript"></script>-->
  </body>
</html>
