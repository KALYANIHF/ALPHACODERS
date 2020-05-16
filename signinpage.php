<?php
include 'sign.php';
//login sucess
if ($conn) {
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $psw = $_POST['psw'];
    $email_ID = $_POST['email_id'];
    $cont_NO = $_POST['cont_no'];
    $query = "INSERT INTO `users`(`full_name`, `username`, `psw`, `email_id`, `cont_NO`) VALUES ('$full_name','$username','$psw','$email_ID','$cont_NO')";
    if ($psw == null || $full_name == null || $username == null) {
        header('Location: errsign.html');
    } else {
        mysqli_query($conn, $query);
        session_start();
        $_SESSION['name'] = $username;
        header('Location: signinsucess.php');
    }
} else {
    echo "sign_UP is not possible";
}
mysqli_close($conn);

//login not sucess.
