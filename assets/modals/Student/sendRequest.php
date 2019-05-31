<div class="modal fade" id="sendRequest" tabindex="-1" role="dialog" aria-labelledby="profileLabel" aria-hidden="true">
  <div class="modal-dialog profileModal" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="profileLabel">Registrato de alumno</h5>
      </div>
      <div class="modal-body">
        <form id="frm_addStudent">
        <div class="form-group">
          <label for="schoolSelect">Selecciona tu escuela</label>
          <select class=" form-control" id="schoolSelect" required></select>
        </div>
        <div class="form-group">
          <label for="schoolSelect">Selecciona tu perfil de estudiante</label>
          <select class=" form-control" id="profileSelect" required></select>
        </div>


      </div>
      <div class="modal-footer">
          <input type="submit" id="sendStudentRequest"  class="btn btn-success" value ="Enviar">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
     </form>
    </div>
  </div>
</div>
