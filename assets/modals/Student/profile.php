<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="profileLabel" aria-hidden="true">
  <div class="modal-dialog profileModal" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h6 class="modal-title" id="profileLabel">Perfil</h6>
      </div>
      <div class="modal-body">
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td><h5><a href="javascript:;">Nombre:</a></h5></td>
                    <td><?php echo ucwords(strtolower($atributos['uNombre'][0])); ?></td>
                </tr>
                <tr>
                    <td><h5><a href="javascript:;">Cuenta:</a></h5></td>
                    <td><?php echo ucwords(strtolower($atributos['uCuenta'][0])); ?></td>
                </tr>
                <tr>
                    <td><h5><a href="javascript:;">Correo:</a></h5></td>
                    <td><?php echo ucwords(strtolower($atributos['uCorreo'][0])); ?></td>
                </tr>
                <tr>
                    <td><h5><a href="javascript:;">Tipo:</a></h5></td>
                    <td><?php echo ucwords(strtolower($atributos['uTipo'][0])); ?></td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
