<?php
include 'sign.php';
if ($conn) {
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $query = "SELECT psw FROM `users` WHERE (username = '" . $username . "' AND psw = '" . $password . "')";
    $rev = mysqli_query($conn, $query);
    if (mysqli_num_rows($rev) == 0) {
        header('Location: errorlogin.html');
    } else {
        session_start();
        $_SESSION['name'] = $username;
        header('Location: loginsucess.php');
    }

} else {
    echo "login cant be done ";
}
mysqli_close($conn);
