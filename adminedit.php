<?php
include 'sign.php';
session_start();
$username = $_SESSION['name'];
if ($conn) {
    $query = "SELECT COUNT(*) AS total FROM `subscribe_table`";
    $result = mysqli_query($conn, $query);
    $value = mysqli_fetch_assoc($result);
    $count = $value['total'];
    // echo $count;
    mysqli_free_result($result);
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AlphaCoders</title>
    <link rel="icon" href="./img/alphacoders.png">
    <link rel="stylesheet" href="css\style12.css">
    <link rel="stylesheet" href="fontawesome-free-5.11.2-web\fontawesome-free-5.11.2-web\css\all.css">
</head>

<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span id="col">Alpha</span> Coders</h1>
                <h1 id="usname"><i style="color: #0f0" class="fas fa-2x fa-user-lock"></i><span id="col"><?php echo "$username" ?></span></h1>
            </div>
            <nav>
                <ul>
                    <li style="margin-top: 8px;"><a href="mainadmin.php">LOG_OUT</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="showcase">
        <div class="flex">
            <div class="subcount">
                <h2 style="color: #f00;font-size:2rem;">subs-count</h2>
                <br>
                <br>
                <h1 style="font-size: 4rem; color:#ff0000;background-color:#fff;margin-top:-20px;"><?php echo "$count" ?></h1>
            </div>
            <div class="queryedit">
                <h2 style="color: #000;background-color:#f00 ;font-size:1.5rem;">email and query</h2>
                <div class="flex2">
                    <div id="ifr">
                        <iframe id="iframe" width="860" height="320" name="frame2" src="welcomeadmin.html" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <!--
                    <div id="btnn">
                        <a href="#" target="frame2"><button type="button2">query</button></a>
                        <a href="#" target="frame2"><button type="button1">edit</button></a>
                        <a href="#" target="frame2"><button type="button3">update</button></a>
                    </div>
-->
                </div>
            </div>
        </div>
        <div id="btn">
            <a href="b_query.php" target="frame2"><button type="button">Query</button></a>
            <a href="b_Email.php" target="frame2"><button type="button">Email</button></a>
        </div>
    </section>
    <footer>
        <p>
            <span style="color: #000">Alpha</span> Coders , Copyright &copy; 2020
        </p>
    </footer>
</body>

</html>