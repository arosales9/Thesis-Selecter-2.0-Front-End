//****************** SERVICIOS ******************//
function SummarySrv() {
  return {
    getThesis: ()=> {
      const thesis_id = getParameterByName('thesis_id');
      var item = $.getJSON(`http://localhost/Thesis-Selecter-2.0-Back-End/Thesis/info_thesis/${thesis_id}`,() => {});
      return item;
    }
  }

}
