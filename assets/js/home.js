function getAllThesis()
{
  $.getJSON(`https://cenedic4.ucol.mx/Thesis-Selecter/Thesis-Selecter-2.0-Back-End/index.php/Thesis/all_thesis`,
  (result) => {})
   .success((result) =>
   {
     const thesisHtml = getThesisHtml(result);
     $('#thesis').html(thesisHtml);
   })
   .fail(()=>
   {
     alert('Error');
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
                  <a onclick="guardarID(${ThesisID});" class="btn btn-success" style="outline: 0; text-decoration: none;">
                      Ver más <i class="m-icon-swapright m-icon-white"></i>
                  </a>
            </div>
        </div>
        </article>`;
	});
	return thesisHtml.join('');
}

function guardarID(thesis_id)
{
  sessionStorage.setItem('thesis_id', thesis_id);
  window.location.assign("inside.php");
}

$(document).ready(function () {
  getAllThesis();
});
