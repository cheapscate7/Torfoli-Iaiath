<?php
/*

Class about: This is the resiger button, it only displays to user's that are not logged in
*/
session_start();

if(!isset($_SESSION["teitiach_user"]))
{
  	echo '<div class="register" id="regButton">Cofrestru</div>';
    echo '<p class="descriptionCC">Cliciwch unrhyw air i weld ei ddiffiniad.</p>';
}
else
{
    echo '<div class="register2" id="wordButton">Ychwanegu gair</div>';
    echo '<p class="descriptionCC">Cliciwch unrhyw air i weld ei ddiffiniad.</p>';
}
?>
