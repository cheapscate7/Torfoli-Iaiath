<?php
/*

Class about: This allows the user to recover their account if they've forgotten their password.
*/
error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', 1);

echo "<br>kurwa";

$email=$_POST['email'];
//$email=mysql_real_escape_string($email);
$status = "OK";
//$msg="";



  session_start();
  $con=mysqli_connect("localhost","root","herpderp","user_database");

//*
  echo "<br><br>";
 
	$query="SELECT email, username, password FROM user WHERE email = '".$email."';";
	$st=mysqli_query($con,$query);
	$recs=mysqli_num_rows($st);
	$row=mysqli_fetch_assoc($st);
	$em=$row['email'];// email is stored to a variable
	echo "<br>kurwa".$em;

//*/
//*
	if($recs == 0) // No records returned, so no email address in our table
	{ 
		echo "<center><font face='Verdana' size='2' color=red><b>No Password</b><br>
		Sorry, your address is not in our database. Please register to use our site. 
		<BR><BR><a href='register.php'> Sign UP </a> </center>"; 
		//exit;
	}
//*/
//*
  else
  {
    // formating the mail posting headers
    
    
    $to = $em;
    $subject = "Your Request for login details";
    $message = "This is in response to your request for login details at BananaCoWebsite\n\nLogin ID: ".$row['username']."\nPassword: ".$row['password']."\n\nThank You\n\n Admin Team";
    $headers = "From: eeu258@bangor.ac.uk";

     

    // mail funciton will return true if it is successful
    if(mail($to, $subject, $message, $headers))
    {
      echo "<center><b>Thank you.</b><br>Your password has been sent to your email address. Please check your mail. </center>";
      header("refresh:2; url=home.php");
    }
    else // there is a system problem in sending mail
    {
      echo "<center>There was a problem sending to our email address. Please contact site-admin. <br><br></center>"; 
      header("refresh:2; url=contact.php");
    } 
  }
//*/
?>