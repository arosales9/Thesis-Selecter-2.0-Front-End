
function get_all_request(uCuenta)
{
  $.getJSON(`http://201.164.196.37/Thesis-Selecter-2.0-Back-End/Thesis/researcher_tesis/${uCuenta}`,
  (result) => {})
   .success((result) =>
   {
     if (result.Error=='0')
     {
       Swal.fire({ type: 'warning', title: 'Pagina vacía', text: 'Nunguna tesis registrada'});
     } else {
       const thesisHtml = getThesisHtml(result);
       $('#thesis').html(thesisHtml);
     }

   })
   .fail(()=>
   {
       Swal.fire({ type: 'error', title: 'Error 404', text: 'Error de conexión'});
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