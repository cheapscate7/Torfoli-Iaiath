<?php
/*

Class about: This is what pops up when you log in successfully 
*/
echo "<br>Im here success";
session_start();
echo "<br>Im here session started";
if(!isset($_SESSION["teitiach_user"]))
{
	header("location:main_login.php");
}

?>

<html>
<body>
	<br>Login Successful
</body>
</html>

<?php
echo "<br>";
echo $_SESSION["teitiach_user"];
echo "<br>Lets derp around";
?>