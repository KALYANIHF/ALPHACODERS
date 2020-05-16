<?php
$conn = mysqli_connect("localhost", "root", "souvikmondal", "sign_in_page");
if (mysqli_connect_error()) {
    echo "connection is not done because of" . mysqli_connect_error();
}
