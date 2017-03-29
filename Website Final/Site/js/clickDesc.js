var main = function() 
{
  $(document).ready(function() {
    $('.rightSide').on('click', '#descButton', function() {
        var name = $(this).closest(".rightSide").find("h1, h2").text();
        localStorage['clickedWord'] = name;
        window.location.replace("addDescription.php");
    });
  });
}
window.addEventListener("load", main);