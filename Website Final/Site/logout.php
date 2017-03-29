<?php
/*

Class about: This class logs the user out after the user clicks the log out button
*/
session_start();

echo "step 1";
if(isset($_SESSION["teitiach_user"]))
{
  unset ($_SESSION["teitiach_user"]);
  unset ($_SESSION["teitiach_password"]);
  header("location:home.php");
}
?>