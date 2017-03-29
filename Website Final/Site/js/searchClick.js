function searchWord() 
{
   $('.blueBox').toggleClass('blueBox wordBox');
   var txt = $('#wordInput').val();
   var url = "search.php?name='";
   var end = "'";
   var res = url.concat(txt);
   var fin = res.concat(end);
   $("#rightSide").empty();
   $.ajax({url: fin}).done(function( html ) {
    $("#rightSide").append(html);
   });
   return false;
}


