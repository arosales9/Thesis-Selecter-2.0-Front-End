function getAttributes()
{
  $.getJSON(`https://cenedic4.ucol.mx/Thesis-Selecter/Thesis-Selecter-2.0-Back-End/home.php`, function (result) {

       $("#name").text(result.uNombre);
       $("#rol").text(result.uTipo);
       $("#correo").text(result.uCorreo);
       $("#cuenta").text(result.uCuenta);
  }).fail( function () {
    window.location.assign("https://cenedic4.ucol.mx/Thesis-Selecter/index.php");
  });
}

$(document).ready(function () {
  getAttributes();
});
