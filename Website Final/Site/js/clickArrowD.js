var main = function() 
{
  $(document).ready(function() {
    $('.rightSide, .leftSide').on('click', '.arrowdown', function() {
        var name = $(this).closest(".wordBox, .blueBox, .rightSide").find("h1, h2").text();
        var url = "votedown.php?word="
        var res = url.concat(name);
        window.location.replace(res);
    });
  });
}
window.addEventListener("load", main);