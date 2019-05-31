//****************** SERVICIOS ******************//
function InsideSrv()
{
  return {

    addStudentRequest: function(data)
    {
      console.log(data);
      const item = $.post("http://localhost/Thesis-Selecter-2.0-Back-End/Student/new_student",
            {
             UniversityID: 1,
             SchoolID: data[2],
             ThesisID: data[0],
             EducativeProgramID: data[1]
           },
             function(){});
      return item;
    },
    getInfoThesis: function () {
      const thesis_id = getParameterByName('thesis_id');
      const item = $.getJSON(`http://localhost/Thesis-Selecter-2.0-Back-End/Thesis/info_thesis/${thesis_id}`,() => {});
      return item;
    },
    getStudentRegister: function()
    {
      const item = $.getJSON(`http://localhost/Thesis-Selecter-2.0-Back-End/Student/existe`,() => {});
      return item;
    },
    getStudentOptions: function()
    {
      const item = $.getJSON(`http://localhost/Thesis-Selecter-2.0-Back-End/Student/getOptions`,() => {});
      return item;
    },

  }

}
