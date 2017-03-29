<?php
/*

Class about: This is the class that adds the word to the database
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
    header("refresh:2; url=addWord.php");
  }
  else
  {
    $result = mysqli_query($con,"SELECT * FROM words WHERE word = '".$_POST['word']."' LIMIT 1");
    $result2 = mysqli_query($con,"SELECT * FROM user WHERE username = '".$_SESSION["teitiach_user"]."' LIMIT 1");
    $row = mysqli_fetch_assoc($result);
    $row2 = mysqli_fetch_assoc($result2);
    $derp = mysqli_num_rows($result);
    
      if ($derp == 1)
      {
        echo '<center>Word already in database</center>';
        mysqli_close($con);
        header("refresh:2; url=home.php");
      }
      else
      {
      //*
      $sql = "INSERT INTO words (word, user_id, rating) VALUES (:Word, :Id, :Rating)";
    
      $stmt = $pdo->prepare($sql);

      $stmt->bindValue(':Word',$_POST['word'],PDO::PARAM_STR);
      $stmt->bindValue(':Id',$row2['user_id'],PDO::PARAM_INT);
      $stmt->bindValue(':Rating',0,PDO::PARAM_INT);
    
      $stmt->execute();
      
      $result3 = mysqli_query($con,"SELECT * FROM words WHERE word = '".$_POST['word']."' LIMIT 1");
      $row3 = mysqli_fetch_assoc($result3);
      
      $sql2 = "INSERT INTO descriptions (description_content, word_id) VALUES (:Desc, :Id)";
    
      $stmt2 = $pdo->prepare($sql2);

      $stmt2->bindValue(':Desc',$_POST['desc'],PDO::PARAM_STR);
      $stmt2->bindValue(':Id',$row3['word_id'],PDO::PARAM_INT);
    
      $stmt2->execute();
      //*/
      
        echo '<center>Word added to the database by user '.$_SESSION["teitiach_user"].'</center>';
        header("refresh:2; url=home.php");
      }
	}
}
?>