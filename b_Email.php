<?php
include 'sign.php';
if ($conn) {
    $query = 'SELECT * FROM `subscribe_table`';
    $result = mysqli_query($conn, $query);
    $values = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
} else {
    echo "Failed";
}
if (isset($_POST['delete'])) {
    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
    $query1 = "DELETE FROM `subscribe_table` WHERE em_id = {$delete_id}";
    if (mysqli_query($conn, $query1)) {
        header('Location: deletesuc2.html');
    } else {
        header('Location: deletefail.html');
    }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alphacoders</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 style="text-align: center">Email_Add</h1>
        <?php foreach ($values as $value): ?>
            <div class="card text-white bg-success mb-2" style="max-width: 25rem; margin: auto;">
                <div class="card-body">
                    <h5 style="color: #000;text-align: center"><?php echo $value['email_add'] . "<br>"; ?></h5>
                </div>
                <form class="pull-right" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="hidden" name="delete_id" value="<?php echo $value['em_id'] ?>">
                    <input style="float: right" type="submit" value="delete" name="delete" class="btn btn-danger">
                </form>
            </div>
        <?php endforeach;?>
    </div>
</body>

</html>