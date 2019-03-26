function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function alerta()
{
  const alerta = getParameterByName('msg');
  switch (alerta)
  {
  case '1':
  Swal.fire({ type: 'warning', title: 'Registro', text: 'Registrate como investigador para continuar navegando'});
  break;
  }
}
