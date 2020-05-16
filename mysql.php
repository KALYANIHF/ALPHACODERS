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
          <li><a href="sqlcontent\2_sqlhome.html" target="iframe2">SQL_HOME</a></li>
          <li><a href="sqlcontent\3_sqlintro.html" target="iframe2">SQL_INTRO</a></li>
          <li><a href="sqlcontent\4_sqlselectdis.html" target="iframe2">SQL_SELECTLIST</a></li>
          <li><a href="sqlcontent\5_sqlwhere.html" target="iframe2">SQL_WHERECLASE</a></li>
          <li><a href="sqlcontent\6_sqlandn.html" target="iframe2">SQL_AND||NOT</a></li>
          <li><a href="sqlcontent\7_Orderby.html" target="iframe2">SQL_OrderBY</a></li>
          <li><a href="sqlcontent\8_insert.html" target="iframe2">SQL_INSERT</a></li>
          <li><a href="sqlcontent\9_sqlnull.html" target="iframe2">SQL_NULL</a></li>
          <li><a href="sqlcontent\10_sqlcountsum.html" target="iframe2">SQL_SUM_COUNT</a></li>
          <li><a href="sqlcontent\12_sqlbetween.html" target="iframe2">SQL_BETWEEN_OPRT</a></li>
          <li><a href="sqlcontent\13_sqljoin.html" target="iframe2">SQL_JOIN</a></li>
          <li><a href="sqlcontent\14_sqlunion.html" target="iframe2">SQL_UNION</a></li>
          <li><a href="sqlcontent\15_sqlhaving.html" target="iframe2">SQL_HAVING</a></li>
          <li><a href="sqlcontent\16_selectstant.html" target="iframe2">SQL_SELECT</a></li>
          <li><a href="sqlcontent\17_sqlcommands.html" target="iframe2">SQL_COMMANDS</a></li>
          <li><a href="sqlcontent\18_sqlcreatedata.html" target="iframe2">SQL_CREATEDATABASE</a></li>
          <li><a href="sqlcontent\19_sqldropdatabase.html" target="iframe2">SQL_DROPDATABASE</a></li>
          <li><a href="sqlcontent\20_sqlbackupdb.html" target="iframe2">SQL_BACKUPDATA</a></li>
          <li><a href="sqlcontent\21_sqlcreatetable.html" target="iframe2">SQL_CREATETABLE</a></li>
          <li><a href="sqlcontent\22_sqldroptable.html" target="iframe2">SQL_DROPTABLE</a></li>
        </ul>
      </nav>
    </div>
    <div id="two">
       <iframe id="iframe" name = "iframe2" src="sqlcontent\1_sqlwelcome.html" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</body>
</html>
