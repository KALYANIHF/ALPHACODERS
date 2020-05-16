<?php
include 'subs.php';
if ($conn) {
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email_id']);
    $query = htmlentities($_POST['question']);
    $query = "INSERT INTO `querypage`(`em_id`, `name`, `email_id`, `query`) VALUES ('null','$name','$email','$query')";
    if ($name != null && $email != null && $query != null) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            mysqli_query($conn, $query);
            header("Location: querysucess.html");
        } else {
            header("Location: validemail.html");
        }
    } else {
        header("Location: allfieldrequre.html");
    }
} else {
    echo "subscribe can't be happen";
}
mysqli_close($conn);
