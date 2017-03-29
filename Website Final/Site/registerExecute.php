<?php
/*

Class about: This class is what sends the user's register information to our database
*/
error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', 1);

session_start();
$con=mysqli_connect("localhost","root","herpderp","user_database");
$pdo = new PDO('mysql:dbname=user_database;host=localhost:3306', 'root', 'herpderp'); 
$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_SESSION["teitiach_user"]))
{
	echo '<center>You are already logged in</center>';
	mysqli_close($con);
	header("refresh:2; url=home.php");
}
else
{
  if(empty($_POST['nickname']) || empty($_POST['email']) || empty($_POST['password']))
  {
    echo '<center>Please enter all necessary values</center>';
    header("refresh:2; url=register.php");
  }
  else
  {
  $result = mysqli_query($con,"SELECT * FROM user WHERE username = '".$_POST['nickname']."' LIMIT 1");
  $result2 = mysqli_query($con,"SELECT * FROM user WHERE email = '".$_POST['email']."' LIMIT 1");
  $derp = mysqli_num_rows($result);
  $derp2 = mysqli_num_rows($result2);
  if ($derp == 1 || $derp2 == 1)
  {
    echo '<center>Username or email not available</center>';
    mysqli_close($con);
    header("refresh:2; url=register.php");
	}
	else
	{
    $sql = "INSERT INTO user (username, email, password) VALUES (:Username, :Email, :Password)";
    
    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(':Username',$_POST['nickname'],PDO::PARAM_STR);
    $stmt->bindValue(':Email',$_POST['email'],PDO::PARAM_STR);
    $stmt->bindValue(':Password',$_POST['password'],PDO::PARAM_STR);
    
    $stmt->execute();
    
    echo '<center>Register successful, please log in</center>';
    header("refresh:2; url=home.php");
	}
	}
}
?>