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
          <li><a href="svggraphcontent\2_svghome.html" target="iframe2">graph_HOME</a></li>
          <li><a href="svggraphcontent\3_2dgraphics.html" target="iframe2">2D_Graphics</a></li>
          <li><a href="svggraphcontent\4_3dgraphics.html" target="iframe2">3D_Graphics</a></li>
          <li><a href="svggraphcontent\5_svg.html" target="iframe2">SVG</a></li>
          <li><a href="svggraphcontent\6_canvas.html" target="iframe2">CANVAS</a></li>
          <li><a href="svggraphcontent\7_webgl.html" target="iframe2">WEB_GL</a></li>
          <li><a href="svggraphcontent\8_audio&vedio.html" target="iframe2">Video_&_Audio</a></li>
          <li><a href="svggraphcontent\9_webRTC.html" target="iframe2">WEB_RTC</a></li>
          <li><a href="svggraphcontent\10_basicuse.html" target="iframe2">Basic_usage</a></li>
          <li><a href="svggraphcontent\11_drawingshape.html" target="iframe2">DRAWING_SHAPES</a></li>
          <li><a href="svggraphcontent\12_usingimg.html" target="iframe2">USING_IMG</a></li>
          <li><a href="svggraphcontent\13_pixelsmanupulate.html" target="iframe2">Pixels_in_graph</a></li>
          <li><a href="svggraphcontent\14_canvaselement.html" target="iframe2">Cancas_Element</a></li>
          <li><a href="svggraphcontent\15_svgelement.html" target="iframe2">SVG_ELEMENT</a></li>
          <li><a href="svggraphcontent\16_svgattribute.html" target="iframe2">SVG_ATTRIBUTE</a></li>
          <li><a href="svggraphcontent\17_applyingsvg.html" target="iframe2">APPLYING_SVG</a></li>
          <li><a href="svggraphcontent\19_create3dobj.html" target="iframe2">Createing_3d_obj</a></li>
          <li><a href="svggraphcontent\20_basicelement.html" target="iframe2">Basic_Element</a></li>
          <!-- <li><a href="svggraphcontent\21_canvasmanu.html" target="iframe2">Cancas_Manupulation</a></li> -->
        </ul>
      </nav>
    </div>
    <div id="two">
       <iframe id="iframe" name = "iframe2" src="svggraphcontent\1_svgwelcome.html" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</body>
</html>
