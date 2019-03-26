function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function getInfoThesis()
{
  const thesis_id = getParameterByName('thesis_id');
  $.getJSON(`http://localhost/Thesis-Selecter-2.0-Back-End/Thesis/info_thesis/${thesis_id}`,
  (result) => {})
   .success((result) =>
   {
     console.log(result);
     getThesisHtml(result);

   })
   .fail(()=>
   {
     window.location.assign('home.php?msg=2');
   });
}
//
function getThesisHtml(result) {
  result.map((thesis) => {
		const { ThesisName, Image, Summary } = thesis;
    $('#ThesisName').text(ThesisName);
    $("#Image").attr("src", Image);
    $("#Image").attr("alt", ThesisName);
    $("#fotoZoom").attr("href", Image);
    $("#fotoZoom").attr("title", ThesisName);
    $('#Summary').text(Summary);
  });
}

$(document).ready(function ()
{
  getInfoThesis();
  // getAllThesis();
});
