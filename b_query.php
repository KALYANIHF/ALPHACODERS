<?php
include 'subs.php';
if ($conn) {
    $query = 'SELECT * FROM `querypage`';
    $result = mysqli_query($conn, $query);
    $value = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
} else {
    echo "failed";
}
if (isset($_POST['delete'])) {
    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
    $query = "DELETE FROM `querypage` WHERE em_id = {$delete_id}";
    if (mysqli_query($conn, $query)) {
        header('Location: deletesuc1.html');
    } else {
        header('Location: deletefail.html');
    }
}
if (isset($_POST['Process'])) {
    $edit_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
    $name1 = mysqli_real_escape_string($conn, $_POST['name_of']);
    $email1 = mysqli_real_escape_string($conn, $_POST['email_id']);
    $query1 = mysqli_real_escape_string($conn, $_POST['query']);
    $query2 = "INSERT INTO `processed`(`p_id`, `name`, `email_id`, `query`) VALUES ('null','$name1','$email1','$query1')";
    if (mysqli_query($conn, $query2)) {
        header('Location: querypros.html');
    } else {
        header('Location: queryfail.html');
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
    <div class="container container1">
        <h1 style="text-align: center">QUERYS:</h1>
        <?php foreach ($value as $val): ?>
            <div class="card text-white bg-primary mb-2" style="max-width: 30rem; margin: auto">
                <div class="card-header">
                    <h5>Query by <span style="color: #000;font-weight:bolder"><?php echo $val['name']; ?></span></h5>
                </div>
                <div class="card-body">
                    <h5><?php echo $val['query']; ?></h5>
                </div>

                <form class="pull-left" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="hidden" name="delete_id" value="<?php echo $val['em_id'] ?>">
                    <input type="hidden" name="name_of" value="<?php echo $val['name'] ?>">
                    <input type="hidden" name="email_id" value="<?php echo $val['email_id'] ?>">
                    <input type="hidden" name="query" value="<?php echo $val['query'] ?>">
                    <input style="float: left;" type="submit" value="Process" name="Process" class="btn btn-success">
                    <input style="float: right;" type="submit" value="delete" name="delete" class="btn btn-danger">
                </form>
            </div>
        <?php endforeach;?>
    </div>
</body>

</html>