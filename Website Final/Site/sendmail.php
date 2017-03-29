<?php
/*

Class about: This is the class that sends the information to the admin email
*/
error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', 1);
$to = "eeu258@bangor.ac.uk";
$subject = $_POST['name'].": ".$_POST['subject'];
$message = $_POST['message'];
$headers = "From: ".$_POST['email'];

mail($to, $subject, $message, $headers);
echo "<center>Message has been sent</center>";
header("refresh:2; url=contact.php"); 
?>