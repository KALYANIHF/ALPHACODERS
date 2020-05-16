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
    <link rel="icon" href="./img/logo_brush.png">
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
          <li><a href="cssconpage\2_Home.html" target="iframe2">Home</a></li>
          <li><a href="cssconpage\3_whatcss.html" target="iframe2">Introduction to CSS</a></li>
          <li><a href="cssconpage\4_csssyntax.html" target="iframe2">CSS Syntax</a></li>
          <li><a href="cssconpage\5_selector.html" target="iframe2">CSS Selector</a></li>
          <li><a href="cssconpage\6_addcss.html" target="iframe2">How to Add CSS</a></li>
          <li><a href="cssconpage\7_inline.html" target="iframe2">Inline CSS</a></li>
          <li><a href="cssconpage\8_internal.html" target="iframe2">Internal CSS</a></li>
          <li><a href="cssconpage\9_external.html" target="iframe2">External css</a></li>
          <li><a href="cssconpage\10_comments.html" target="iframe2">CSS Comments</a></li>
          <li><a href="cssconpage\11_background.html" target="iframe2">CSS Background</a></li>
          <li><a href="cssconpage\12_border.html" target="iframe2">CSS Border</a></li>
          <li><a href="cssconpage\13_display.html" target="iframe2">CSS Display</a></li>
          <li><a href="cssconpage\14_float.html" target="iframe2">CSS Float</a></li>
          <li><a href="cssconpage\15_font.html" target="iframe2">CSS Font</a></li>
          <li><a href="cssconpage\16_margin.html" target="iframe2">CSS Margin</a></li>
          <li><a href="cssconpage\17_padding.html" target="iframe2">CSS Padding</a></li>
          <li><a href="cssconpage\18_animation.html" target="iframe2">CSS Animation</a></li>
          <li><a href="cssconpage\19_gradient.html" target="iframe2">CSS Gradient</a></li>
          <li><a href="cssconpage\20_media_quary.html" target="iframe2">CSS @Media Quary</a></li>
          <li><a href="cssconpage\21_layout.html" target="iframe2">CSS Layout</a></li>
          <li><a href="cssconpage\22_table.html" target="iframe2">CSS Table</a></li>
        </ul>
      </nav>
    </div>
    <div id="two">
       <iframe id="iframe" name = "iframe2" src="cssconpage\1_welcome.html" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</body>
</html>
