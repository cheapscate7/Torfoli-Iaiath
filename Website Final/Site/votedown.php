<?php
/*

Class about: This class limits the user to be able to only down vote a word once
*/
  error_reporting(E_ALL|E_STRICT);
  ini_set('display_errors', 1);

  session_start();
  $con=mysqli_connect("localhost","root","herpderp","user_database");
  if(!isset($_SESSION["teitiach_user"]))
  {
    echo "<center>Log in or registration required</center>";
    header("refresh:2; url=register.php");
  }
  else
  {
    $name = $_SESSION["teitiach_user"];
    $word = $_GET["word"];
    $temp = mysqli_query($con,"SELECT * FROM words WHERE word = '".$word."' LIMIT 1");
    $temp2 = mysqli_query($con,"SELECT * FROM user WHERE username = '".$name."' LIMIT 1");
    $row = mysqli_fetch_assoc($temp);
    $row2 = mysqli_fetch_assoc($temp2);
    $result = mysqli_query($con,"SELECT * FROM rated_words WHERE (word_id = ".$row['word_id']." AND user_id = ".$row2['user_id'].") LIMIT 1");
		$derp = mysqli_num_rows($result);
    if ($derp == 1)
    {
      echo "<center>You have already rated this word</center>";
      header("refresh:2; url=home.php");
    }
    else
    {
       mysqli_query($con,"INSERT INTO rated_words (word_id, user_id, value) VALUES (".$row['word_id'].", ".$row2['user_id'].", -1)");
       mysqli_query($con,"UPDATE words SET rating = rating - 1 WHERE word_id=".$row['word_id'].";");
       echo "<center>Thank you for your vote!</center>";
       header("refresh:2; url=home.php");
    }
  }
  mysqli_close($con);
?>