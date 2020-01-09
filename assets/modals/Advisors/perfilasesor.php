<div class="modal fade mdT" id="exampleModal1" tabindex="-1" aria-hidden="true">
  <div style="width: 60%; height: auto; margin:0 auto;">
    <div class="colorEspecial">
          
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title" id="exampleModalLabel">Perfil de usuario</h1>
      </div>

      <div class="modal-body">
        <table class="table table-striped" id="tdDatos">
          <tbody>
            <tr>
              <th scope="row">Nombre</th>
              <td><?php echo ucwords(strtolower($atributos['uNombre'][0])); ?></td>
            </tr>
            <tr>
              <th scope="row">Correo</th>
              <td><?php echo ucwords(strtolower($atributos['uCuenta'][0])); ?></td>
            </tr>
            <tr>
              <th scope="row">Institucion</th>
              <td><?php echo ucwords(strtolower($atributos['uCorreo'][0])); ?></td>
            </tr>
            <tr>
              <th scope="row">Edificio</th>
              <td><?php echo ucwords(strtolower($atributos['uTipo'][0])); ?></td>
            </tr>
            <tr>
              <th scope="row">Cubiculo</th>
              <td>Datos</td>
            </tr>
            <tr>
              <th scope="row">Grupo de investigacion</th>
              <td>Datos</td>
            </tr>
            <tr>
              <th scope="row">Linea de investigacion</th>
              <td>Datos</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>