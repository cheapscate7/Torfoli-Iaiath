<?php
/*

Class about: This class displays the up / down vote arrows
*/
			$con=mysqli_connect("localhost","root","herpderp","user_database");
			if (mysqli_connect_errno())
  			{
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
  			}

			$result = mysqli_query($con,"SELECT * FROM words ORDER BY rating DESC");

      while($row = mysqli_fetch_array($result))
      {
         $result2 = mysqli_query($con,"SELECT * FROM descriptions WHERE word_id = ".$row['word_id']." LIMIT 1");
         $row2 = mysqli_fetch_assoc($result2);

         echo '<div class="wordBox" onclick="selectPHP(this)">';
          echo "<div class='arrows'>";
          echo "<div class='arrowup'> </div>";
          echo "<div class='arrowtext'>".$row['rating']."</div>";
          echo "<div class='arrowdown'> </div>";
          echo '</div>';
         
            echo '<h2 class="innerTitle">'.$row['word'].'</h2>';
            echo $row2['description_content'];
            echo "<hr>";
         echo "</div>";
      }
			mysqli_close($con);
?>
