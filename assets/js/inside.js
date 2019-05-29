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
     if (result.Error=='0')
     {
       window.location.assign('home.php?msg=2');
     } else {
       getThesisHtml(result.data.result);
     }

   })
   .fail(()=>
   {
     window.location.assign('home.php?msg=4');
   });
}
//
function getThesisHtml(result) {
  result.map((thesis) => {
		const { ResearcherName, ThesisName, Image, TopicALL, ResearchGroupName, ResearchGroupKey, ResearchLineName, EducativeProgramName, RequirementsALL, PlazasID, Assigned, EmailAddress, UniversityName, SchoolName, BuildingName, RoomName, Link, SupportName, FundingAgencyAllName } = thesis;
		$('#ResearcherName').text(ResearcherName);
    $('#ThesisName').text(ThesisName);
    $("#Image").attr("src", Image);
    $("#Image").attr("alt", ThesisName);
    $("#fotoZoom").attr("href", Image);
    $("#fotoZoom").attr("title", ThesisName);
    $('#Topic').text(TopicALL);
    $('#ResearchGroup').text(ResearchGroupKey+"-"+ResearchGroupName);
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
