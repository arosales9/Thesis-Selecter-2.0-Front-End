//****************** SERVICIOS ******************//
function HomeSrv()
{
  return {
    getAllThesis: function() {
      var list = $.getJSON(`http://localhost/Thesis-Selecter-2.0-Back-End/Thesis/all_thesis`,() => {});
      return list;
    }
  }
}
