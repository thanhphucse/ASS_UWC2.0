<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", 'root', '', "examples");
    $id = $_GET['id'];
    mysqli_query($con, "DELETE FROM staff_db where id=$id");
    header("location: index.php");
    ?>
</body>

</html>