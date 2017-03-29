var main = function() 
{
  $(document).ready(function() {
    $('.rightSide, .leftSide').on('click', '.arrowup', function() {
        var name = $(this).closest(".wordBox, .blueBox, .rightSide").find("h1, h2").text();
        var url = "voteup.php?word="
        var res = url.concat(name);
        window.location.replace(res);
    });
  });
}
window.addEventListener("load", main);