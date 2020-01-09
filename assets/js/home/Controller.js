//****************** CALLBACK ******************//
$(document).ready(function(){
  $("#md-cargando").modal("show");

  setTimeout(function() { 
    $('#md-cargando').fadeOut(1000);
      setTimeout(function() { 
      $('#md-cargando').modal("hide").fadeOut(500);
    }, 400);
    getThesisSrv();
  }, 3000);
});


var getThesisSrv = () => {
  HomeSrv().getAllThesis()
    .success((result) => {
      if (result.status!=200) {
        alert(result.status, result.msg);
      } else {
        const thesisHtml = getThesisHtml(result.data.result);
        
        const filtersGroupHtml = getFiltersGroupHtml(result.data.filters.group);//Grupo de investigacion
        const filtersLineHtml = getFiltersLineHtml(result.data.filters.line);//Linea de investigacion
        const filtersStudentHtml = getFiltersStudentHtml(result.data.filters.studentProfile);
        const filtersResearcherHtml = getFiltersResearcherHtml(result.data.filters.researcher);
        
        $('#thesis').html(thesisHtml);

        $('#filtersGroup').html(filtersGroupHtml); //Grupo de investigacion
        $('#filtersLine').html(filtersLineHtml);
        $('#filtersStudent').html(filtersStudentHtml);
        $('#Researcher').html(filtersResearcherHtml);
        notification(result.data.request);
      }
     })
    .fail(()=>
      {
        Swal.fire({ type: 'error', title: 'Error 404', text: 'Error de conexón'});
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

/*Grupo de investigacion*/
function getFiltersGroupHtml(group){
  const groupCodeHtml = group.map((singleGroup) => {
    const { ResearchGroupID, ResearchGroupKey, ResearchGroupName} = singleGroup;              
      return (`<li class="list-group-item">
        <div class="checkbox form-group">
          <label>
            <div class="checker">
              <span>
                <input name="TopicID[]" class="sort_rang TopicID" type="checkbox" value="${ResearchGroupID}">
              </span>
            </div>
            ${ResearchGroupKey+" - "+ResearchGroupName}
          </label>
        </div>
      </li>`);
    }
  );
  return groupCodeHtml.join('');
}

/*Linea de investigacion*/
function getFiltersLineHtml(line){
  const lineCodeHtml = line.map((singleLine) => {
    const { ResearchLineID, ResearchLineName} = singleLine;              
      return (`<li class="list-group-item">
        <div class="checkbox form-group">
          <label>
            <div class="checker">
              <span>
                <input name="TopicID[]" class="sort_rang TopicID" type="checkbox" value="${ResearchLineID}">
              </span>
            </div>
            ${ResearchLineName}
          </label>
        </div>
      </li>`);
    }
  );
  return lineCodeHtml.join('');
}

/*Perfil del estudiante*/
function getFiltersStudentHtml(student){
  const studentCodeHtml = student.map((singleStudent) => {
    const { EducativeProgramID, EducativeProgramName} = singleStudent;              
      return (`<li class="list-group-item">
        <div class="checkbox form-group">
          <label>
            <div class="checker">
              <span>
                <input name="TopicID[]" class="sort_rang TopicID" type="checkbox" value="${EducativeProgramID}">
              </span>
            </div>
            ${EducativeProgramName}
          </label>
        </div>
      </li>`);
    }
  );
  return studentCodeHtml.join('');
}

/*Asesor*/
function getFiltersResearcherHtml(researcher){
  const researcherCodeHtml = researcher.map((singleResearcher) => {
    const { ResearcherID, ResearcherName} = singleResearcher;              
      return (`
      
      <li class="list-group-item">
        <div class="checkbox form-group">
          <label>
            <div class="checker">
              <span>
                <input name="TopicID[]" class="sort_rang TopicID" type="checkbox" value="${ResearcherID}">
              </span>
            </div>
            ${ResearcherName}
          </label>
        </div>
      </li>`
      );
    }
  );
  return researcherCodeHtml.join('');
}

/*Se octiene todas las tesis*/
function getThesisHtml(allThesis) {
  var html;
	const thesisHtml = allThesis.map((thesis) => {
		const { ThesisID, ThesisName, StatusName, Image, StatusID } = thesis;
    if (StatusID=='1')
    {
      html = `                
                <article class="col-lg-4 col-md-6 col-sm-12 full-tesis">
                  <div class="conteiner-thesis">
                    <div class="Select-thesis-head">
                      <h3 class="head">Tesis</h3>
                      <span>${StatusName}</span>
                    </div>

                    <div class="Select-thesis-body">
                      <figure class="se-th-fi">
                        <a>
                          <img src="${Image}" class="img-fluid img-thesis" alt="Nombre">
                        </a>
                      </figure>
                    </div>

                    <div class="Select-thesis-footer pt-2">
                      <p class="thesis-name">
                        ${ThesisName}
                      </p>
         
                      <a class="btn btn-success btn-click" href="inside.php?thesis_id=${ThesisID}">
                        Ver más
                        <i class="m-icon-swapright m-icon-white"></i>
                      </a>
                    </div>
                  </div>
                </article>`;
    } else {
      html = `                
                <article class="mt-5 col-lg-4 col-md-6 col-sm-12 full-tesis">
                  <div class="conteiner-thesis">
                    <div class="Cerrado">
                      <h3 class="head">Tesis</h3>
                      <span>${StatusName}</span>
                    </div>

                    <div class="Select-thesis-body">
                      <figure class="se-th-fi">
                        <a>
                          <img src="${Image}" class="img-fluid img-thesis" alt="Nombre">
                        </a>
                      </figure>
                    </div>

                    <div class="Select-thesis-footer pt-2">
                      <p class="thesis-name">
                        ${ThesisName}
                      </p>
         
                      <a class="btn btn-success btn-click" href="inside.php?thesis_id=${ThesisID}">
                        Ver más
                        <i class="m-icon-swapright m-icon-white"></i>
                      </a>
                    </div>
                  </div>
                </article>`;

    }
		return html;
	});
	return thesisHtml.join('');
}

$(document).ready(function() {
 //getThesisSrv();
});

//****************** OTROS ******************//

// $(".panel > div > h5").mouseover(function(){
//   $(".panel > div > h5").css("color", "#669933");
//   }, function(){
//   $(".indicator > i").css("color", "#669933");
// });

// $(".panel > div > h5").on({
//     mouseenter: function () {
//         //stuff to do on mouse enter
//         $(".panel > div > h5").css("color", "#669933!important");
//         $(".indicator > i").css("color", "#669933");
//     },
//     mouseleave: function () {
//         //stuff to do on mouse leave
//         $(".panel > div > h5 > a > i").css("color", "#14235f");
//         $(".panel > div > h5").css("color", "#14235f");
        
//     }
// });


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
