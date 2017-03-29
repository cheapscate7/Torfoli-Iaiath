var main = function() 
{
  $(document).ready(function() {
    $('.leftSide').on('click', '#regButton', function() {
        window.location.replace("register.php");
    });
  });
}
window.addEventListener("load", main);