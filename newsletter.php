<?php
include 'subs.php';
if ($conn) {
    $email = htmlentities($_POST['email_id']);
    $query = "INSERT INTO ` news_letter` (`em_id`, `email_add`) VALUES (NULL, '$email')";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        mysqli_query($conn, $query);
        header("Location: subpass.html");

    } else {
        header("Location: subfail.html");

    }
} else {
    echo "subscribe can't be happen";
}
mysqli_close($conn);
