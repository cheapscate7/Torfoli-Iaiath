<!doctype html>
<html lang="en">
<!--
		Class about: This is the interface for the contact page-->
    <head>
        <meta charset="UTF-8">
        <title>Cysyllwtch â ni</title>
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
        Os oes gennych unrhyw gwestiwn neu sylwadau, defnyddiwch y ffurflen isod i gysylltu â ni.
        <br><br>
        
        <form action="sendmail.php" method="POST">
        Enw:*
        <br>
        <input type="text" name="name" class="length">
        <br><br>
        E-bost:*
        <br>
        <input type="text" name="email" class="length">
        <br><br>
        Pwnc:*
        <br>
        <input type="text" name="subject" class="length">
        <br><br>
        Neges:*
        <br>
        <textarea name="message" class="desc"></textarea>
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