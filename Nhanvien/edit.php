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
    $id = isset($_POST['_id']) ? $_POST['_id'] : '';
    $full_name = isset($_POST['_full_name']) ? $_POST['_full_name'] : '';
    $user_name = isset($_POST['_user_name']) ? $_POST['_user_name'] : '';
    $type = isset($_POST['_type']) ? $_POST['_type']: '';
    $isBackOfficers = isset($_POST['_isBackOfficers']) ? $_POST['_isBackOfficers'] : '';

    $sql = "UPDATE staff_db SET FULL_NAME = '$full_name', USER_NAME = '$user_name', TYPE = '$type', isBackOfficer = '$isBackOfficer' where id='$ID'";
    mysqli_query($con, $sql);
    // mysqli_query($con, "INSERT INTO staff_db (FULL_NAME, USER_NAME, TYPE, isBackOfficer) VALUES('$fullName','$user_name', '$type', '$isBackOfficers')");
    header("Location:index.php");
    ?>
</body>

</html>