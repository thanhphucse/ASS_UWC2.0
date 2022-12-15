<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="template.css">
    <link rel="stylesheet" href="staff.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="inner-header">
            <span class="menu">
                <li><img src="./images/home.png" width="30px" class="icon"> <a href="./home.html">TRANG CHỦ
                    </a>
                </li>
                <li><a href="./home.html">DASHBOARD</a> </li>
                <li><a href="#">NHÂN VIÊN</a> </li>
                <li><a href="#">PHƯƠNG TIỆN</a> </li>
                <li><a href="#">QUẢN LÝ MCPs</a> </li>
                <li><a href="#">GIAO CÔNG VIỆC</a> </li>
                <li><img src="./images/user.png" width="30px" class="icon"><a href="#">ĐĂNG XUẤT</a> </li>
            </span>
        </div>
        <p style="text-align: center; font-weight: bold">TRANG CHỦ/NHÂN VIÊN/CẬP NHẬT</p>
    </header>
    <?php
    $con = mysqli_connect("localhost", 'root', '', "examples");
    $id = $_GET['id'];
    $sql = "SELECT * FROM staff_db where id='$id'";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['ID'];
        $full_name = $row['FULL_NAME'];
        $user_name = $row['USER_NAME'];
        $type = $row['TYPE'];
        $isBackOfficer = $row['isBackOfficer'];
    }
    ?>
    <form action="edit.php" method="post">
        <div>
            <label>ID</label>
            <input type="number" name="_id" value="<?php echo $id; ?>"><br></br>
            <label>Full Name</label>
            <input type="text" name="_full_name" value="<?php echo $full_name; ?>"><br></br>
            <label>User Name</label>
            <input type="text" name="_user_name" value="<?php echo $user_name; ?>"><br></br>
            <label>Type</label>
            <input type="text" name="_type" value="<?php echo $type; ?>"><br></br>
            <label>isBackOfficer</label>
            <input type="number" name="_isBackOfficer" value="<?php echo $isBackOfficer; ?>"><br></br>
            <input type="submit" value="submit" style="width: 70px; height: 30px; float: right; background-color: rgb(1, 222, 130)">
        </div>

    </form>

    <footer>
        <span>Organization X copyright © by Group2_L01</span>
    </footer>
</body>

</html>