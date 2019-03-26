function get_researcher(uCuenta)
{
  $.getJSON(`http://201.164.196.37/Thesis-Selecter-2.0-Back-End/Researcher/researcher_existe/${uCuenta}`,
  (result) => {})
  .success(()=>
  {
     window.location.assign('home.php?msg=3');
  })
   .fail(()=>
   {
     window.location.assign('registro.php?msg=1');
   });
}
