<?php
  require_once('assets/views/index/head.php');
?>

<div class="container text-justify">
  <div class="row">
    <div class="col-lg-7 col-md-7 col-sm-12">
      <div class="row">
        <table>
          <tr>
            <td colspan="2">
              <h1>Sobre Nosotros</h1>
              <p>
                El objetivo de esta plataforma es facilitar la elección de tesis de grado, de manera dinámica, a través de una interfaz amigable y basada en los intereses académicos del estudiante.
              </p>
            </td>
          </tr>

          <tr>
            <td colspan="2">
              <h1>Introducción</h1>
              <p>
                Ante la dificultad de los estudiantes al elegir un tema de tesis de grado, se desarrolló una plataforma web para guiarlo en dicho propósito. De una manera organizada, sintetizada, sencilla y clara, al usuario (estudiante) se le presenta información relacionada con sus posibles intereses académicos (título de la tesis, tema central y línea de investigación asociados, datos del asesor, perfil del tesista, beneficios recibidos). A través de la selección de dichos intereses, se le mostrarán los temas de las tesis disponibles de realizar, acorde a las características de su elección, así como un resumen de las mismas, coadyuvando a la toma de decisión de su tema de tesis.
              </p>
            </td>
          </tr>

          <tr>
            <td colspan="2">
              <h1>Conclusiones</h1>
              <p>
                Los estudiantes serán beneficiados al conocer lo básico y necesario acerca de un tema de tesis de grado, pudiendo elegir su tema, de manera acertada, rápida y sencilla, acorde a sus intereses académicos. Adicionalmente, y dado que es una plataforma web, el estudiante podrá acceder a esta herramienta en cualquier momento y desde cualquier lugar. Todo ello permite que, al usar esta plataforma, el estudiante elija con facilidad y certeza, su tema de tesis. 
              </p>
            </td>
          </tr>

          <tr>
            <td>
              <p>Interfaz de usuario amigable</p>
              <p>Dinámica y Rápida</p>
              <p>Responsive</p>
            </td>
            <td>
              <p>Selección de tesis</p>
              <p>Proceso de aceptación</p>
              <p>Generación de la carta de compromiso</p>
            </td>
          </tr>
        </table>
      </div>
    </div>

    <div class="col-lg-5 col-md-5 col-sm-12">
      <h1>Nuestras Habilidades</h1>

      <span>Eficacia y Eficiencia 100%</span>
      <div class="progress">
        <div role="progressbar" class="progress-bar" style="width: 100%; height: 25px; background: #5cb85c;"></div>
      </div>

      <span>Disponibilidad 99%</span>
      <div class="progress">
        <div role="progressbar" class="progress-bar" style="width: 100%; height: 25px; background: #5cb85c;"></div>
      </div>

      <span>Dinamismo 99%</span>
      <div class="progress">
        <div role="progressbar" class="progress-bar" style="width: 100%; height: 25px; background: #5cb85c;"></div>
      </div>

      <span>Interfaz de usuario amigable 100%</span>
      <div class="progress">
        <div role="progressbar" class="progress-bar" style="width: 100%; height: 25px; background: #5cb85c;"></div>
      </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center; margin-bottom: 35px;">
		<button id="login-btn" type="button" class="btn btn-success" name="button">Ingresar</button>
		</div>
    </div>
  </div>
</div>


<script src="assets/js/login.js" charset="utf-8"></script>
<?php $footer=file_get_contents("http://www.ucol.mx/cms/footerapp.php");
echo $footer; ?>
