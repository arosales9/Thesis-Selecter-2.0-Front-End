//****************** SERVICIOS ******************//

function getInfoThesis()
{
  const thesis_id = getParameterByName('thesis_id');
  $.getJSON(`http://localhost/Thesis-Selecter-2.0-Back-End/Thesis/info_thesis/${thesis_id}`,
  (result) => {})
   .success((result) =>
   {
     service(result);
     // if (result.Error=='0')
     // {
     //   window.location.assign('home.php?msg=2');
     // } else {
     //   getThesisHtml(result.data.result);
     // }

   })
   .fail(()=>
   {
     Swal.fire({
       type: 'error',
       title: 'Error de Conexion',
       showConfirmButton: false,
       timer: 1500
     }).then(() => {
      window.location.assign('home.php');
    });
   });
}

function getProfile() {
  var profile = $.getJSON(`http://localhost/Thesis-Selecter-2.0-Back-End/Student_profile/getStudentProfile`,
  (result) => {});
  return profile;
}


//****************** CALLBACK ******************//
function service(result)
{
  if (result.status!=200) {
    alert(result.status, result.msg)
  } else {
    getThesisHtml(result.data.result);
  }
}

function profile() {

}



//****************** CONTROLADOR ******************//
function getThesisHtml(result) {
  result.map((thesis) => {
		const { ResearcherName, ThesisName, Image, TopicALL, ResearchGroupName, ResearchGroupKey, ResearchLineName, EducativeProgramName, RequirementsALL, PlazasID, Assigned, EmailAddress, UniversityName, SchoolName, BuildingName, RoomName, Link, SupportName, FundingAgencyAllName, DesName, LevelName } = thesis;
		$('#ResearcherName').text(ResearcherName);
    $('#ThesisName').text(ThesisName);
    $("#Image").attr("src", Image);
    $("#Image").attr("alt", ThesisName);
    $("#fotoZoom").attr("href", Image);
    $("#fotoZoom").attr("title", ThesisName);
    $('#Topic').text(TopicALL);
    ResearchGroupNameL = ResearchGroupName.toLowerCase();
    $('#ResearchGroup').text(ResearchGroupKey+" - "+ResearchGroupNameL.replace(/\b\w/g, l => l.toUpperCase()));
    $('#ResearchLine').text(ResearchLineName);
    $('#StudentProfile').text(EducativeProgramName);
    $('#Tecnologies').text(RequirementsALL);
    $('#Plazas').text(PlazasID);
    $('#Accepted').text(Assigned);
    $('#ResearcherEmail').text(EmailAddress);
    $('#University').text(UniversityName);
    $('#Work').text(SchoolName);
    $('#Building').text(BuildingName);
    $('#Room').text(RoomName);
    DesNameL = DesName.toLowerCase();
    $('#Des').text(DesNameL.replace(/\b\w/g, l => l.toUpperCase()));
    $('#Level').text(LevelName);
    if (Link!='N/A')
    {
      $('#Cv').html(`<a href="${Link}" target="_blank">${Link}</a>`);
    } else {
     $('#Cv').text(Link);
    }
    $('#Support').text(SupportName);
    $('#FunddingAgency').text(FundingAgencyAllName);
  });
}

async function enviarSolicitud() {
  console.log(getProfile());
  const { value: fruit } = await Swal.fire({
  title: 'Selecciona tu perfil',
  input: 'select',
  inputOptions: {
    'apples': 'Apples',
    'bananas': 'Bananas',
    'grapes': 'Grapes',
    'oranges': 'Oranges'
  },
  inputPlaceholder: 'Perfil',
  showCancelButton: true,
 });
}

//****************** OTROS ******************//

//ALERTAS
function alert(status, msg)
{
  switch (status)
  {
  case 200:
  Swal.fire({ type: 'success', title: status, text: msg});
  break;
  case 201:
  Swal.fire({ position: 'top-end', type: 'success', title: 'msg', showConfirmButton: false, timer: 1500 });
  break;
  case 202:
  Swal.fire({ type: 'success', title: status, text: msg});
  break;
  case 204:
  Swal.fire({ type: 'question', title: 'Ups!', text: msg});
  break;
  case 400:
  Swal.fire({ type: 'error', title: 'Error: '+status, text: msg, showConfirmButton: false, timer: 1500}).then(() => { window.location.assign('home.php')});
  break;
  case 401:
  Swal.fire({ type: 'error', title: 'Error: '+status, text: msg, showConfirmButton: false, timer: 1500}).then(() => { window.location.assign('home.php')});
  break;
  case 404:
  Swal.fire({ type: 'error', title: 'Error: '+status, text: msg, showConfirmButton: false, timer: 1500}).then(() => { window.location.assign('home.php')});
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


//****************** RUN ******************//
$(document).ready(function() {
 getInfoThesis()
});
