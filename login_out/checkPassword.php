<?php
    $con = mysqli_connect("localhost", 'root', '', "examples");
    if (!$con) {
        die('Could not connect: ' . mysqli_connect_error($con));
    }
    $sql = "SELECT * FROM staff_db";
    $records = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($records)) {
        if($row["USER_NAME"] == $_GET['username'] && $row["password"] == $_GET['password']){
            echo "Thông tin đăng nhập không chính xác";
            header("Location:../homepage/homepage.php");
        }
        else{
            echo "Thông tin đăng nhập không chính xác";
        }
    }
?>