//****************** CALLBACK ******************//

  var getRequestSrv = () => {
    console.log(RequestSrv().getRequest());
    RequestSrv().getRequest()
    .success((result) =>
    {
      if (result.status!=200) {
        alert(result.status, result.msg);
        notification(result.data.request);
      } else {
        getRequestHtml(result.data.result);
        notification(result.data.request);

      }
    })
    .fail(()=>
    {
      Swal.fire({
        type: 'error',
        title: 'Error de Conexion',
        showConfirmButton: false,
        timer: 1500
      }).then(() => {
       // window.location.assign('solicitudes.php');
     });
    });
  }

  var addRevertSrv = (id) => {
    RequestSrv().addRevert(id)
    .success((result) =>
    {
      console.log('llego', result);
      if (result.status!=200) {
        alert(result.status, result.msg);
        getRequestSrv();
      } else {
        getRequestSrv();
      }
    })
    .fail(()=>
    {
      Swal.fire({
        type: 'error',
        title: 'Error de Conexion',
        showConfirmButton: false,
        timer: 1500
      }).then(() => {
       // window.location.assign('solicitudes.php');
     });
    });
  }

  var addRejectSrv = (id) => {
    RequestSrv().addReject(id)
    .success((result) =>
    {
      if (result.status!=200) {
        alert(result.status, result.msg);
        getRequestSrv();
      } else {
        getRequestSrv();
      }
    })
    .fail(()=>
    {
      Swal.fire({
        type: 'error',
        title: 'Error de Conexion',
        showConfirmButton: false,
        timer: 1500
      }).then(() => {
       // window.location.assign('solicitudes.php');
     });
    });
  }

  var addAcceptSrv = (id) => {
    RequestSrv().addAccept(id)
    .success((result) =>
    {
      if (result.status!=200) {
        alert(result.status, result.msg);
        getRequestSrv();
      } else {
        getRequestSrv();
      }
    })
    .fail(()=>
    {
      Swal.fire({
        type: 'error',
        title: 'Error de Conexion',
        showConfirmButton: false,
        timer: 1500
      }).then(() => {
       // window.location.assign('solicitudes.php');
     });
    });
  }


  //****************** CONTROLADOR ******************//
  function notification(request) {
    if (request>0)
    {
      $('#notification').html(`<span class="btn-danger btn-sm" style="-webkit-border-radius: 50px; -moz-border-radius: 50px; border-radius: 50px;">${request}</span>`);
    } else {
      $('#notification').html(``);
    }
  }

  function getRequestHtml(result) {
    var process = "";
    var accepted = "";
    var rejected = "";
    var prohibido = "";

    result.map((request) => {
      const { RequestID, RequestStatusID, ThesisName, ThesisID, StudentID, StudentName, UniversityName, SchoolName, EducativeProgramName, EmailAddress } = request;
      switch (RequestStatusID)
      {
      case '1':
      console.log("llego");
      accepted = accepted.concat(`
      <tr>
        <td scope="col">${RequestID}</td>
        <td scope="col" width="10%">${ThesisName}</td>
        <td scope="col">${StudentName.toLowerCase().replace(/\b\w/g, l => l.toUpperCase())}</td>
        <td scope="col">${EmailAddress}</td>
        <td scope="col">${SchoolName}</td>
        <td scope="col">${EducativeProgramName}</td>
        <td scope="col"><button type="button" class="btn btn-secondary btn-sm" onclick="revertBtn(${RequestID})"><i class="glyphicon glyphicon-repeat"></i></button></td>
      </tr>`);
      break;
      case '2':
      rejected = rejected.concat(`
        <tr>
          <td scope="col">${RequestID}</td>
          <td scope="col" width="10%">${ThesisName}</td>
          <td scope="col">${StudentName.toLowerCase().replace(/\b\w/g, l => l.toUpperCase())}</td>
          <td scope="col">${EmailAddress}</td>
          <td scope="col">${SchoolName}</td>
          <td scope="col">${EducativeProgramName}</td>
          <td scope="col"><button type="button" class="btn btn-secondary btn-sm" onclick="revertBtn(${RequestID})"><i class="glyphicon glyphicon-repeat"></i></button></td>
        </tr>`);
      break;
      case '3':
      process = process.concat(`
        <tr>
          <td scope="col">${RequestID}</td>
          <td scope="col" width="10%">${ThesisName}</td>
          <td scope="col">${StudentName.toLowerCase().replace(/\b\w/g, l => l.toUpperCase())}</td>
          <td scope="col">${EmailAddress}</td>
          <td scope="col">${SchoolName}</td>
          <td scope="col">${EducativeProgramName}</td>
          <td scope="col"><button type="button" class="btn btn-success btn-sm" onclick="acceptBtn(${RequestID})"><i class="glyphicon glyphicon-ok"></i></button> <button type="button" class="btn btn-danger btn-sm" onclick="rejectBtn(${RequestID})"><i class="glyphicon glyphicon-remove" ></i></button></td>
        </tr>`);
      break;
      case '4':
      prohibido = prohibido.concat(`
      <tr>
        <td scope="col">${RequestID}</td>
        <td scope="col" width="10%">${ThesisName}</td>
        <td scope="col">${StudentName.toLowerCase().replace(/\b\w/g, l => l.toUpperCase())}</td>
        <td scope="col">${EmailAddress}</td>
        <td scope="col">${SchoolName}</td>
        <td scope="col">${EducativeProgramName}</td>
      </tr>`);
      break;
      }
    });
    $("#acceptedRequest").html(accepted);
    $("#rejectRequest").html(rejected);
    $("#proccessRequest").html(process);
    $("#prohibidoRequest").html(prohibido);
  }

  $(document).ready(function() {
   getRequestSrv();
  });

  function revertBtn(id)
  {
    console.log('Revertir');
    addRevertSrv(id);
  }
  function rejectBtn(id)
  {
    console.log('Reject');
    addRejectSrv(id);
  }
  function acceptBtn(id)
  {
    console.log('Acceptar');
    addAcceptSrv(id);
  }

  //****************** OTROS ******************//

  //ALERTAS
  function alert(status, msg)
  {
    switch (status)
    {
    case 200:
    Swal.fire({ type: 'success', title: status, text: msg, confirmButtonColor: '#2DAD45'});
    break;
    case 201:
    Swal.fire({ type: 'success', title: msg, showConfirmButton: false, timer: 1500 });
    break;
    case 202:
    Swal.fire({ type: 'success', title: status, text: msg, confirmButtonColor: '#2DAD45'});
    break;
    case 204:
    Swal.fire({ type: 'question', title: 'Ups!', text: msg, confirmButtonColor: '#2DAD45'});
    break;
    case 400:
    Swal.fire({ type: 'error', title: 'Error: '+status, text: msg, showConfirmButton: true, confirmButtonColor: '#2DAD45'}).then(() => { window.location.assign('home.php')});
    break;
    case 401:
    Swal.fire({ type: 'error', title: 'Error: '+status, text: msg, showConfirmButton: true, confirmButtonColor: '#2DAD45'}).then(() => { window.location.assign('home.php')});
    break;
    case 404:
    Swal.fire({ type: 'error', title: 'Error: '+status, text: msg, showConfirmButton: true, confirmButtonColor: '#2DAD45'}).then(() => { window.location.assign('home.php')});
    break;
    }
  }

  //METODO GET
  function getParameterByName(name) {
      name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
      var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
      results = regex.exec(location.search);
      return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
  }

  // 200 OK
  // La solicitud ha tenido éxito. El significado de un éxito varía dependiendo del método HTTP:
  // 201 Created
  // La solicitud ha tenido éxito y se ha creado un nuevo recurso como resultado de ello. Ésta es típicamente la respuesta enviada después de una petición PUT.
  // 202 Accepted
  // La solicitud se ha recibido, pero aún no se ha actuado. Es una petición "Sin compromiso", lo que significa que no hay manera en HTTP que permita enviar una respuesta asíncrona que indique el resultado del procesamiento de la solicitud.
  // 203 Non-Authoritative Information
  // La petición se ha completado con éxito, pero su contenido no se ha obtenido de la fuente originalmente solicitada, sino que se recoge de una copia local o de un tercero. Excepto esta condición, se debe preferir una respuesta de 200 OK en lugar de esta respuesta.
  // 204 No Content
  // La petición se ha completado con éxito pero su respuesta no tiene ningún contenido, aunque los encabezados pueden ser útiles. El agente de usuario puede actualizar sus encabezados en caché para este recurso con los nuevos valores.
  // 400 Bad Request
  // Esta respuesta significa que el servidor no pudo interpretar la solicitud dada una sintaxis inválida.
  // 401 Unauthorized
  // Es necesario autenticar para obtener la respuesta solicitada. Esta es similar a 403, pero en este caso, autenticación es posible.
  // 402 Payment Required
  // Este código de respuesta está reservado para futuros usos. El objetivo inicial de crear este código fue para ser utilizado en sistemas digitales de pagos. Sin embargo, no está siendo usado actualmente.
  // 403 Forbidden
  // El cliente no posee los permisos necesarios para cierto contenido, por lo que el servidor está rechazando otorgar una respuesta apropiada.
  // 404 Not Found
  // El servidor no pudo encontrar el contenido solicitado. Este código de respuesta es uno de los más famosos dada su alta ocurrencia en la web.
