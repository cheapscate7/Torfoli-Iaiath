<!doctype html>
<html lang="en">
<!--
	Class About: This is the form that the user's use to add the word
	to the dictionary-->
    <head>
        <meta charset="UTF-8">
        <title>Ychwanegu gair</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script type="text/javascript" src="js/displayLog.js"></script>
        <script src="jquery.js"></script>
    </head>

    <body>
    	<div id="loginBar"></div>
    		
    	<div class ="topBit">
                <h1>Torfol Iaith - Cysyllwtch â ni</h1>
                Cynnig a graddio geriau newydd ar gyfer yr iaith Gymraeg
                <br><br>
    	</div>
    	
    	<div class="contact">
        <br><br>
        
        <form action="wordExecute.php" method="POST">
        Gair newydd:*
        <br>
        <input type="text" name="word" class="length">
        <br><br>
        Disgrifiad:*
        <br>
        <textarea name="desc" class="desc"></textarea>
        <br><br>
        <input type="submit" value="Anfon" class="loginButton">
        <br><br>
        * Rhaid rhoi rhywbeth
       </form>
      </div>
    	
      <div id="footer">
          <a href="home.php">Cartref<a/>
          <a href="about.php">Amdanom Ni<a/>
          <a href="features.php">Nodweddion<a/>
          <a href="register.php">Cofrestru<a/>
          <a href="contact.php">Cysyllwtch â ni<a/>   
      </div>
	</body>
</html>