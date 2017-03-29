var main = function() 
{
  $.ajax({url: "display.php"}).done(function( html ) {
      $("#leftSideD").append(html);
  });
}
window.addEventListener("load", main);