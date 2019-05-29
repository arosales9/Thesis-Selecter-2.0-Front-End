function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function alerta()
{
  const alerta = getParameterByName('msg');
  switch (alerta)
  {
  case '1':
  Swal.fire({ type: 'error', title: 'Error 404', text: 'Selecciona una tesis antes de continuar'});
  break;
  case '2':
  Swal.fire({ type: 'error', title: 'Error 404', text: 'Tesis no encontrada'});
  break;
  case '3':
  Swal.fire({ type: 'error', title: 'Error de acceso', text: 'No tienes permiso para acceder'});
  break;
  case '4':
  Swal.fire({ type: 'error', title: 'Error de conexión', text: 'Falló al cargar la información'});
  break;
  }
}


function getAllThesis()
{
  $.getJSON(`http://localhost/Thesis-Selecter-2.0-Back-End/Thesis/all_thesis`,
  (result) => {})
   .success((result) =>
   {
     if (result.Error=='0')
     {
       Swal.fire({ type: 'error', title: 'Error 404', text: 'Nunguna tesis registrada'});
     } else {
       const thesisHtml = getThesisHtml(result.data.result);
       $('#thesis').html(thesisHtml);
     }
   })
   .fail(()=>
   {
     Swal.fire('Datos no encontrados','Intentelo más adelante','question');
   });
}

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
