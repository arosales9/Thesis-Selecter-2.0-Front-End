<div class="modal fade" id="exampleModal">
  <div class="sc">
        
    <div class="modal-header" style="text-align: center;">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h1 class="modal-title" id="exampleModalLabel">Agregar tesis</h1>
    </div>

    <div class="modal-body">
      <form id="formRegistroTesis" action="Pruebas.php" method="post">

        <div class="form-group">
          <label for="nomTesis" style="padding-left: 3px;"><h4>Nombre de tesis:</h4></label>
          <input type="text" class="form-control" id="nomTesis" placeholder="Nombre de su tesis">
        </div>

        <div class="form-group">
          <label for="exaFile" style="padding-left: 3px;"><h4>Temas centrales(Max 4):</h4></label>
          <select class="form-control" id="almReq" style="width: 100% !important;">
            <option>Ninguna seleccion</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
          <span>Si no encuentra tema, agregue uno nuevo <a data-toggle="modal" data-target="#newTopic">aqui</a></span>
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
      <button type="button" class="btn btn-success" form="formRegistroTesis">Agregar Tesis</button>
    </div>
  </div>
</div>

