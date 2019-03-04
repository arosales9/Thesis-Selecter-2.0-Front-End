function login()
{
  $('#login-btn').click(function ()
{
  getAttributes();
});
}

function getAttributes()
{
  $.get( "https://cenedic4.ucol.mx/Thesis-Selecter/Thesis-Selecter-2.0-Back-End/home.php", function() {

 }).success(function() {
   window.location.assign("https://cenedic4.ucol.mx/Thesis-Selecter/home.html");
 })
  .fail(function() {
    window.location.assign("https://cenedic4.ucol.mx/Thesis-Selecter/Thesis-Selecter-2.0-Back-End/home.php?login");
  });
}

$(document).ready(function ()
{
  login();
});
