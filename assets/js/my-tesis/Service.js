//****************** SERVICIOS ******************//
function HomeSrv()
{
  return {
    getAllThesis: function() {
      var list = $.getJSON(`http://localhost/Thesis-Selecter-2.0-Back-End/Thesis/researcher_tesis`,() => {});
      return list;
    },
    editPost: function(data) {
      console.log(data);
      const item = $.post("http://localhost/Thesis-Selecter-2.0-Back-End/Thesis/post",
            {
             ThesisID: data[0],
             PostID: data[1]
           },
             function(){});
      return item;
    }

  }
}
