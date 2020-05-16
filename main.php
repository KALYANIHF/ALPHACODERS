<?php
session_start();
$username = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>welcome | to main page</title>
	<link rel="stylesheet" href="./css/style6.css">
  <link rel="icon" href="./img/alphacoders.png">
  <link rel="stylesheet" href="fontawesome-free-5.11.2-web\fontawesome-free-5.11.2-web\css\all.css">
</head>
<body>
  <header>
      <div class="container">
        <div id="branding">
          <h1><span id="col">Alpha</span> Coders</h1>
        </div>
           <h1 id="usrname"><i class="fab fa-creative-commons-by"></i><?php echo "$username" ?></h1>
        <nav>
          <ul>
            <li class="current"><a href="main.php">Home</a></li>
            <li><a href="home.html">Log Out</a></li>
          </ul>
        </nav>
      </div>
	</header>
	 <section id="boxes1">
      <div class="container">
        <div class="box">
          <a href="htmlmain.php"> <img class="imgflow" src="./img/logo_html.png" alt="html logo and link for html page" /></a>
          <h3>HTML5 Markup</h3>
          <p>
            <b>Learn HTML5 Markup and find interistic projects</b>
          </p>
        </div>
        <div class="box">
         <a href="csspage.php"> <img class="imgflow" src="./img/logo_css.png" alt="css logo and link for css page" /></a>
          <h3>CSS3 Styling</h3>
          <p>
            <b>Learn CSS style sheet to make your webside stunning</b>
          </p>
        </div>
        <div class="box">
          <a href="svggraph.php"><img class="imgflow" src="./img/logo_brush.png" alt=" svg logo and link for svg page" /></a>
          <h3>Graphic Design</h3>
          <p>
            <b style=>Learn Graphic Design to make your own logo and animation for your web page </b>
          </p>
        </div>
    </div>
    </section>
<section id="boxes2">
  <div class="container">
        <div class="box">
          <a href="phppage.php"><img class="imgflow" src="./img/phplogo2.png" alt=" php logo and link for php page"></a>
          <h3>PHP font to back</h3>
          <p>
            <b >Learn PHP serverside Language and learn backend tech</b>
          </p>
        </div>
        <div class="box">
          <a href="javascript.php"><img src="./img/javascript.png" alt=" javascript logo and link for javascript  page" class="imgflow"></a>
          <h3>Javascript</h3>
          <p><b>Learn javascript for makeing your web page more functional and secure</b></p>
        </div>
        <div class="box">
          <a href="mysql.php"><img src="./img/alpha.png" alt=" mysql logo and link for mysql page" class="imgflow"></a>
          <h3>mysql and xampp</h3>
          <p><b> Learn mysql database xampp server and sql language for manageing user data with fun</b></p>
        </div>
      </div>
    </section>
    <footer>
      <p>
        <span style="color: #000">Alpha</span> Coders , Copyright &copy; 2019
      </p>
    </footer>
</body>
</html>
