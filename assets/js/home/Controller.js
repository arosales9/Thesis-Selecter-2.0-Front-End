//SERVICIOS

function getAllThesisSrv()
{

  $.getJSON(`http://localhost/Thesis-Selecter-2.0-Back-End/Thesis/all_thesis`,
  (result) => {})
   .success((result) =>
   {
     service(result);
   })
   .fail(()=>
   {
     Swal.fire({ type: 'error', title: 'Error 404', text: 'Error de conexón'});
   });
}


//Llamada de SERVICIOS
function service(result)
{
  console.log(result);
  if (result.status!=200) {
    alert(result.status, result.msg)
  } else {
    const thesisHtml = getThesisHtml(result.data.result);
    $('#thesis').html(thesisHtml);
  }
}



//CONTROLADOR

function getThesisHtml(allThesis) {
	const thesisHtml = allThesis.map((thesis) => {
		const { ThesisID, ThesisName, StatusName, Image } = thesis;
		return `<article class="col-md-3 col-sm-6 col-xs-12" style="">
        <div class="pricing hover-effect" style="border: 1px solid gray;    position: relative; margin-bottom: 15px;">

            <div class="pricing-head">
                     <h3 class="bg-success head">Tesis
                <span class="enunciado">
                    ${StatusName}
                </span>
                </h3>
                <span>
                <figure style="height: 245px; width:100%; padding-top: 10px; justify-content: center; align-items: center; display: flex;">
                    <a><img style="height: auto; max-height: 245px; width: auto; display: flex;" class="img-responsive center-block" src="${Image}" alt="Nombre" style="margin-top: 20px;"/></a>
                </figure>
                </span>
            </div>
            <div class="pricing-footer footer-stylesheet">
                <p class="thesis-name parrafo">
                    ${ThesisName}
                </p>

                  <a href="inside.php?thesis_id=${ThesisID}" class="btn btn-success" style="outline: 0; text-decoration: none;">

                      Ver más <i class="m-icon-swapright m-icon-white"></i>
                  </a>
            </div>
        </div>
        </article>`;
	});
	return thesisHtml.join('');
}

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
  Swal.fire({ type: 'error', title: 'Error: '+status, text: msg});
  break;
  case 401:
  Swal.fire({ type: 'error', title: 'Error: '+status, text: msg});
  break;
  case 404:
  Swal.fire({ type: 'error', title: 'Error: '+status, text: msg});
  break;
  }
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


//INICIADOR
$(document).ready(function() {
 getAllThesisSrv();
});
