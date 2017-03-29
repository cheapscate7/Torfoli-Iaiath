var main = function() 
{
  $.ajax({url: "loginBarCheck.php"}).done(function( html ) {
      $("#loginBar").append(html);
  });
}
window.addEventListener("load", main);