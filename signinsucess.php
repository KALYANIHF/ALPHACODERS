<?php
session_start();
$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="Affordable and professional web design" />
    <meta
      name="keywords"
      content="web design, affordable web design, professional web design"
    />
    <meta name="author" content="souvik mondal,monodip,bishal,rudra" />
    <title>welcome | to Alpha_Codres</title>
    <link rel="icon" href="./img/alphacoders.png" />
    <link rel="stylesheet" href="./css/style5.css" />
  </head>

  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="col">Alpha</span> Coders</h1>
        </div>
        <nav>
          <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Services</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section id="showcase">
      <div class="container">
        <h1>WELCOME TO <span class="col">ALPHA</span> CODERS</h1>
        <h2><?php echo $name; ?></h2>
        <h2>WISH YOU A HAPPY JOURNY</h2>
        <h2>
          for main page
        </h2>
        <a href="main.php"
          ><button id="btn1" type="button" >click here</button></a>
      </div>
    </section>
    <footer>
      <p>
        <span style="color: #000">Alpha</span> Coders , Copyright &copy; 2019
      </p>
    </footer>
  </body>
</html>
