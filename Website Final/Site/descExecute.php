<?php
/*

Class about: This class gets the descriptions of the word
*/
error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', 1);

session_start();
$con=mysqli_connect("localhost","root","herpderp","user_database");
$pdo = new PDO('mysql:dbname=user_database;host=localhost:3306', 'root', 'herpderp'); 
$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(!isset($_SESSION["teitiach_user"]))
{
	echo '<center>Please log in first :P</center>';
	mysqli_close($con);
	header("refresh:2; url=home.php");
}
else
{
  if(empty($_POST['word']) || empty($_POST['desc']))
  {
    echo '<center>Please enter all necessary values</center>';
    header("refresh:2; url=addDescription.php");
  }
  else
  {
    $result = mysqli_query($con,"SELECT * FROM descriptions WHERE description_content = '".$_POST['desc']."' LIMIT 1");
    $row = mysqli_fetch_assoc($result);
    $derp = mysqli_num_rows($result);
    
      if ($derp == 1)
      {
        echo '<center>Description already in database</center>';
        mysqli_close($con);
        header("refresh:2; url=home.php");
      }
      else
      {
      //*
      $result2 = mysqli_query($con,"SELECT * FROM words WHERE word = '".$_POST['word']."' LIMIT 1");
      $row2 = mysqli_fetch_assoc($result2);
      
      $sql = "INSERT INTO descriptions (description_content, word_id) VALUES (:Desc, :Id)";
    
      $stmt = $pdo->prepare($sql);

      $stmt->bindValue(':Desc',$_POST['desc'],PDO::PARAM_STR);
      $stmt->bindValue(':Id',$row2['word_id'],PDO::PARAM_INT);
    
      $stmt->execute();
      //*/
      
        echo '<center>Description added to the database by user '.$_SESSION["teitiach_user"].'</center>';
        header("refresh:2; url=home.php");
      }
	}
}
?>