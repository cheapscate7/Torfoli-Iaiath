<!doctype html>
<html lang="en">
    <head>
	<!--
		Class about: This is the homepage, it links to the other scripts, most things
		will happen on the homepage, using Divs and CSS; I've made a graphical homepage-->
        <meta charset="UTF-8">
        <title>Cartref</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script type="text/javascript" src="js/displayLog.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/searchClick.js"></script>
        <script type="text/javascript" src="js/displayScript.js"></script>
        <script type="text/javascript" src="js/clickDisplayChange.js"></script>
        <script type="text/javascript" src="js/clickArrowU.js"></script>
        <script type="text/javascript" src="js/clickArrowD.js"></script>
        <script type="text/javascript" src="js/displayReg.js"></script>
        <script type="text/javascript" src="js/clickWord.js"></script>
        <script type="text/javascript" src="js/clickReg.js"></script>
        <script type="text/javascript" src="js/clickDesc.js"></script>
        <script src="jquery.js"></script>
    </head>

    <body>
    
        <div id="loginBar"></div>

        <div class ="topBit">
                <h1>Torfol Iaith</h1>
                Cynnig a graddio geriau newydd ar gyfer yr iaith Gymraeg
                <br><br>
                <input type="text" name="word" placeholder="Dod o hyd i air" class="wordInput" id="wordInput">
                <input type="submit" name="wordSub" class="wordSubmit" id="wordSubmit" value="Chwilio!" onclick="searchWord()">
        </div>
    	
        <div class="leftSide" id="leftSide">
            <div id="leftSideB"></div>
            <div id="leftSideD"></div>
        </div>
      
        <div class="rightSide" id="rightSide"></div>
      
        <div id="footer">
          <a href="home.php">Cartref<a/>
          <a href="about.php">Amdanom Ni<a/>
          <a href="features.php">Nodweddion<a/>
          <a href="register.php">Cofrestru<a/>
          <a href="contact.php">Cysyllwtch â ni<a/>    
        </div>
      
    </body>
</html>