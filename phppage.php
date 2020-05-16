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
    <title>AlphaCoders</title>
    <link rel="icon" href="./img/alphacoders.png">
    <link rel="stylesheet" href="./css/mainstyle.css">
    <link rel="stylesheet" href="fontawesome-free-5.11.2-web\fontawesome-free-5.11.2-web\css\all.css">
</head>
<body>
     <header>
      <div class="container">
        <div id="branding">
          <h1><span id="col">Alpha</span> Coders</h1>
          <h1><i class="fab fa-creative-commons-by"></i><span id="col"><?php echo "$username" ?></span></h1>
        </div>
        <nav>
          <ul style="margin-top:8px;">
            <li><a href="main.php">Home</a></li>
            <li><a href="home.html">Log Out</a></li>
          </ul>
        </nav>
      </div>
  </header>
  <div class="main">
    <div id="one">
      <nav>
        <ul>
          <li><a href="phpconpage\homephp.html" target="iframe2">home</a></li>
          <li><a href="phpconpage\instphp.html" target="iframe2">Install PHP </a></li>
          <li><a href="phpconpage\phpexe.html" target="iframe2">PHP Example</a></li>
          <li><a href="phpconpage\phpprint.html" target="iframe2">PHP PRINT</a></li>
          <li><a href="phpconpage\phpvari.html" target="iframe2">PHP VARIABLE</a></li>
          <li><a href="phpconpage\phpdol.html" target="iframe2">PHP $ AND $$</a></li>
          <li><a href="phpconpage\phpcon.html" target="iframe2">PHP CONSTANTS</a></li>
          <li><a href="phpconpage\phpdata.html" target="iframe2">PHP DATA TYPE</a></li>
          <li><a href="phpconpage\phpoper.html" target="iframe2">PHP OPERATORS</a></li>
          <li><a href="phpconpage\phpcommen.html" target="iframe2">PHP COMMENTS</a></li>
          <li><a href="phpconpage\phpfunc.html" target="iframe2">PHP FUNCTIONS</a></li>
          <li><a href="phpconpage\phparay.html" target="iframe2">PHP ARRAYS</a></li>
          <li><a href="phpconpage\phpstrn.html" target="iframe2">PHP STRINGS</a></li>
          <li><a href="phpconpage\phpfhand.html" target="iframe2">PHP FILE HANDLING</a></li>
          <li><a href="phpconpage\phpuplod.html" target="iframe2">PHP FILE UPLOAD</a></li>
          <li><a href="phpconpage\phpdown.html" target="iframe2">PHP FILE DOWNLOAD</a></li>
          <li><a href="phpconpage\phpmail.html" target="iframe2">PHP MAIL</a></li>
          <li><a href="phpconpage\sqlcont.html" target="iframe2">MYSQL CONNECT</a></li>
          <li><a href="phpconpage\sqldb.html" target="iframe2">MYSQL CREAT DB </a></li>
          <li><a href="phpconpage\sqltab.html" target="iframe2">MYSQL CREAT TAB</a></li>
          <li><a href="phpconpage\json.html" target="iframe2">PHP JSON</a></li>
        </ul>
      </nav>
    </div>
    <div id="two">
       <iframe id="iframe" name = "iframe2" src="phpconpage\welcomephp.html" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
       </iframe>
    </div>
  </div>
</body>
</html>
