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
          <li><a href="htmlconpage\htmlconpage\1_wht_is_html.html" target="iframe2">HTML Home</a></li>
          <li><a href="htmlconpage\htmlconpage\2_introhtml.html" target="iframe2">Introduction to HTML</a></li>
          <li><a href="htmlconpage\htmlconpage\3_html_txt_edit.html" target="iframe2">HTML text editors</a></li>
          <li><a href="htmlconpage\htmlconpage\4_elementshtml.html" target="iframe2">HTML Elements</a></li>
          <li><a href="htmlconpage\htmlconpage\5_attributeshtml.html" target="iframe2">HTML Attributes</a></li>
          <li><a href="htmlconpage\htmlconpage\6_htmlheading.html" target="iframe2">HTML Headings</a></li>
          <li><a href="htmlconpage\htmlconpage\7_htmlparagraph.html" target="iframe2">HTML Paragraphs</a></li>
          <li><a href="htmlconpage\htmlconpage\8_htmlcomments.html" target="iframe2">HTML Comments</a></li>
          <li><a href="htmlconpage\htmlconpage\9_htmllists.html" target="iframe2">HTML lists</a></li>
          <li><a href="htmlconpage\htmlconpage\10_htmlphrasetag.html" target="iframe2">HTML Phrasetags</a></li>
          <li><a href="htmlconpage\htmlconpage\11_htmlimage.html" target="iframe2">HTML Images</a></li>
          <li><a href="htmlconpage\htmlconpage\12_html_global.html" target="iframe2"> html Global attributes</a></li>
          <li><a href="htmlconpage\htmlconpage\13_html_audio.html" target="iframe2">html audio</a></li>
          <li><a href="htmlconpage\htmlconpage\14_html_video.html" target="iframe2">html video</a></li>
          <li><a href="htmlconpage\htmlconpage\15_html_table.html" target="iframe2">HTML table</a></li>
          <li><a href="htmlconpage\htmlconpage\16_html_form.html" target="iframe2">HTML form</a></li>
          <li><a href="htmlconpage\htmlconpage\17_html_tags.html" target="iframe2">HTML tags</a></li>
          <li><a href="htmlconpage\htmlconpage\18_html_button.html" target="iframe2">HTML Button on click</a></li>
          <li><a href="htmlconpage\htmlconpage\19_html_radio.html" target="iframe2">html radio tag </a></li>
          <li><a href="htmlconpage\htmlconpage\20_html_interview.html" target="iframe2">html interview quetions</a></li>
        </ul>
      </nav>
    </div>
    <div id="two">
       <iframe id="iframe" name = "iframe2" src="htmlconpage\htmlconpage\welcome.html" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</body>
</html>
