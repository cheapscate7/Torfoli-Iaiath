<?php
/*

Class about: This class is for the items on the left side of the homepage
*/
      $word = $_GET["name"];
			$con=mysqli_connect("localhost","root","herpderp","user_database");
			if (mysqli_connect_errno())
  			{
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
  			}

			$result = mysqli_query($con,"SELECT * FROM words WHERE word = ".$word." LIMIT 1");
			$row = mysqli_fetch_assoc($result);
      $result2 = mysqli_query($con,"SELECT * FROM descriptions WHERE word_id IN (SELECT word_id FROM words WHERE word = ".$word.")");

      echo '<div>';
          echo '<div>';
          echo "<div class='arrows'>";
          echo "<div class='arrowup'> </div>";
          echo "<div class='arrowtext'>".$row['rating']."</div>";
          echo "<div class='arrowdown'> </div>";
          echo '</div>';
          echo "<h1>".$row['word']."</h1>";
          while($row2 = mysqli_fetch_array($result2))
          {
              echo "<br>".$row2['description_content'];
              echo "<br>";
          }
          echo '<br>';
          echo '<div class="register3" id="descButton">Ychwanegu disgrifiad</div>';
      echo "</div>";

			mysqli_close($con);
?>