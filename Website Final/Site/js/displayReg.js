var main = function() 
{
  $.ajax({url: "displayReg.php"}).done(function( html ) {
      $("#leftSideB").append(html);
  });
}
window.addEventListener("load", main);