<?php
include "testconn.php";
if ($conn) {
    $query = "SELECT COUNT(*) AS total FROM `subscribe_table`";
    $result = mysqli_query($conn, $query);
    $value = mysqli_fetch_assoc($result);
    $count = $value['total'];
    echo $count;
    mysqli_free_result($result);
} else {
    echo "failed for some resons";
}
mysqli_close($conn);
