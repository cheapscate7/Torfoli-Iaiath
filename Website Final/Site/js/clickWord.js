var main = function() 
{
  $(document).ready(function() {
    $('.leftSide').on('click', '#wordButton', function() {
        window.location.replace("addWord.php");
    });
  });
}
window.addEventListener("load", main);