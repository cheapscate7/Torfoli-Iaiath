<?php
/*

Class about: This is the HTML code that displays the login bar / gets the information the user inputs
*/
session_start();

if(!isset($_SESSION["teitiach_user"]))
{
	echo '<form class="login" method="post" action="checklogin.php">';
	echo 'LLYSENW';
	echo '<input type="text" name="myusername" class="inputBox">';
	echo 'CYFRINAIR';
	echo '<input type="password" name="mypassword" class="inputBox">';
	echo '<input type="submit" value="MEWNGOFNODI" class="loginButton">';
	echo '<a href="sendRec.php">  Adennill cyfrif</a>';
	echo '</form>';
}
else
{
  echo '<form class="login">';
  echo 'Helo '.$_SESSION["teitiach_user"].'. Mwynhewch eich diwrnod. ';
  echo '<a href="logout.php">Allgofnodi</a>';
  echo '</form>';
}
?>