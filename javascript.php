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
          <li><a href="javascriptcontent\1_Jshome.html" target="iframe2">home</a></li>
          <li><a href="javascriptcontent\2_jsIntroduction.html" target="iframe2">Introduction</a></li>
          <li><a href="javascriptcontent\3_jsOutput.html" target="iframe2">Js Output</a></li>
          <li><a href="javascriptcontent\4_statement.html" target="iframe2">Js Statement</a></li>
          <li><a href="javascriptcontent\5_syntex.html" target="iframe2">Js Syntex</a></li>
          <li><a href="javascriptcontent\6_jsCommands.html" target="iframe2">Js Commands</a></li>
          <li><a href="javascriptcontent\7_jsVaribles.html" target="iframe2">Js Varibles</a></li>
          <li><a href="javascriptcontent\8_jsOperators.html" target="iframe2">Js Operators</a></li>
          <li><a href="javascriptcontent\9_jsAssignment.html" target="iframe2">Js Assignment</a></li>
          <li><a href="javascriptcontent\10_jsDatatypes.html" target="iframe2">Js Datatypes</a></li>
          <li><a href="javascriptcontent\11_jsFunctions.html" target="iframe2">Js Functions</a></li>
          <li><a href="javascriptcontent\12_jsObjects.html" target="iframe2">Js Objects</a></li>
          <li><a href="javascriptcontent\13_jsEvents.html" target="iframe2">Js Events</a></li>
          <li><a href="javascriptcontent\14_jsNumbermethod.html" target="iframe2">Js Numbermethod</a></li>
          <li><a href="javascriptcontent\15_jsloopwhile.html" target="iframe2">Js Loops</a></li>
          <li><a href="javascriptcontent\16_jsthiskey.html" target="iframe2">Js this_Key</a></li>
          <li><a href="javascriptcontent\17_jsdebuging.html" target="iframe2">Js Debug</a></li>
          <li><a href="javascriptcontent\18_jsstrictmode.html" target="iframe2">Js String</a></li>
          <li><a href="javascriptcontent\19_jsarrowfun.html" target="iframe2">Js Arrowfun()</a></li>
          <li><a href="javascriptcontent\20_jsversions.html" target="iframe2">Js Versions</a></li>
        </ul>
      </nav>
    </div>
    <div id="two">
       <iframe id="iframe" name = "iframe2" src="javascriptcontent\welcomepage.html" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</body>
</html>
