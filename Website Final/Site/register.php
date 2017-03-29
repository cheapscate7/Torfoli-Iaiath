<!doctype html>
<html lang="en">
<!--
		Class about: This class is where the user can resiger their account-->
    <head>
        <meta charset="UTF-8">
        <title>Cofrestru</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script type="text/javascript" src="js/displayLog.js"></script>
        <script src="jquery.js"></script>
    </head>

    <body>
    	<div id="loginBar"></div>	
    	<div class ="topBit">
                <h1>Torfol Iaith - Cofrestru</h1>
                Cynnig a graddio geriau newydd ar gyfer yr iaith Gymraeg
                <br><br>
    	</div>
      
      <div class="registerPage">
       <form action="registerExecute.php" method="POST">
        Llysenw:*
        <br>
        <input type="text" name="nickname" class="length">
        <br><br>
        E-bost:*
        <br>
        <input type="text" name="email" class="length">
        <br><br>
        Cyfrinair:*
        <br>
        <input type="password" name="password" class="length">
        <br><br>
        <input type="submit" value="Cofrestru" class="loginButton">
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