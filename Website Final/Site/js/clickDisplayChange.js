function selectPHP(derp) 
{
   $('.blueBox').toggleClass('blueBox wordBox');
   $(derp).toggleClass('wordBox blueBox');
   var txt = $(derp).find("h2").first().text();
   var url = "display2.php?name='";
   var end = "'";
   var res = url.concat(txt);
   var fin = res.concat(end);
   $("#rightSide").empty();
   $.ajax({url: fin}).done(function( html ) {
    $("#rightSide").append(html);
   });
   return false;
}
window.addEventListener("load", main);