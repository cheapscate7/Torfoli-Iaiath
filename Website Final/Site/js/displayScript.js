var main = function() 
{
$.ajax({url: "display2.php?name='Helo'"}).done(function( html ) {
    $("#rightSide").append(html);
});
}
window.addEventListener("load", main);