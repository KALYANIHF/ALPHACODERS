<?php
include 'sign.php';
if ($conn) {
    $username = $_POST['username'];
    $psw = $_POST['psw'];
    $admin_id = $_POST['admin_id'];
    $query = "SELECT  `admin_id` FROM `admin_list` WHERE ( username = '" . $username . "' AND pass = '" . $psw . "' AND admin_id = '" . $admin_id . "' )";
    $rev = mysqli_query($conn,$query);
    if (mysqli_num_rows($rev) == 0) {
        header('Location: errorlogin1.html');
    }else {
        session_start();
        $_SESSION['name'] = $username;
        header('Location: adminedit.php');
    }
} else {
    echo "failed";
}
