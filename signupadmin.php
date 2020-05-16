<?php
include 'sign.php';
if ($conn) {
    $name = $_POST['full_name'];
    $username = $_POST['username'];
    $admin_id = $_POST['admin_id'];
    $psw = $_POST['psw'];
    $cont_no = $_POST['cont_no'];
    $query = "INSERT INTO `admin_list`(`count`, `full_name`, `username`, `admin_id`, `pass`, `contact_no`) VALUES ('null','$name','$username','$admin_id','$psw','$cont_no')";
    if (strlen($admin_id) < 10 && strlen($psw) < 8) {
        header('Location: errorlogin.html');
    } else {
        mysqli_query($conn, $query);
        session_start();
        $_SESSION['name'] = $username;
        header('Location: adminedit.php');
    }
} else {
    echo "There is a problem in the database connection";
}
mysqli_close($conn);
