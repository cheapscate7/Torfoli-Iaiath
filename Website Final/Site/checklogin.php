<?php
/*
Class about: Checks the username and password matches with the database
*/
session_start();
error_reporting(E_ALL|E_STRICT);

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="herpderp"; // Mysql password
$db_name="user_database"; // Database name
$tbl_name="user"; // Table name
//echo "<br>Im here variables";

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
//echo "<br>Im here connected";

// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
//echo "<br>Im here got stuff";

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
//echo "<br>Im here prepared statements";

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
//echo "<br>Im here query worked";

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
//echo "<br>Im here counted variable";

// If result matched $myusername and $mypassword, table row must be 1 row

if($count>0)
{
	//Register $myusername, $mypassword and redirect to file "login_success.php"
	//echo "<br>Im here count match";
	$_SESSION["teitiach_user"] = $myusername; // session_register("myusername");
	$_SESSION["teitiach_password"] = $mypassword; //session_register("mypassword");
	echo "<br>Im here session registered";
	header("Location: {$_SERVER['HTTP_REFERER']}");
}
else 
{
	echo "<center>Wrong Username or Password</center>";
	header("refresh:2; url=home.php");
}
//echo "<br>script done";
?>