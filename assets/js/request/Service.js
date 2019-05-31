//****************** SERVICIOS ******************//
function RequestSrv() {
  return {
    getRequest: ()=> {
      var item = $.getJSON(`http://localhost/Thesis-Selecter-2.0-Back-End/Request/getRequests`,() => {});
      return item;
    },
    addRevert: (id)=> {
      var item = $.getJSON(`http://localhost/Thesis-Selecter-2.0-Back-End/Request/revertRequest/${id}`,() => {});
      return item;
    },
    addReject: (id)=> {
      var item = $.getJSON(`http://localhost/Thesis-Selecter-2.0-Back-End/Request/rejectRequest/${id}`,() => {});
      return item;
    },
    addAccept: (id)=> {
      var item = $.getJSON(`http://localhost/Thesis-Selecter-2.0-Back-End/Request/acceptRequest/${id}`,() => {});
      return item;
    }

  }

}
