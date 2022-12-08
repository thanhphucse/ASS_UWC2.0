<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="template.css">
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
        <p style="text-align: center; font-weight: bold">TRANG CHỦ/NHÂN VIÊN</p>
    </header>

    <?php
    $con = mysqli_connect("localhost", 'root', '', "examples");
    $id = $_GET['id'];
    $sql = "SELECT * FROM staff_db where id='$id'";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID : " . $row['ID'] . "<br />";
        echo "FULL NAME : " . $row['FULL_NAME'] . "<br />";
        echo "USER NAME : " . $row['USER_NAME'] . "<br />";
        echo "TYPE : " . $row['TYPE'] . "<br />";
        echo "is BackOfficer ?: " . $row['isBackOfficer'] . "<br />";
        echo "AGE : " . $row['AGE'] . "<br />";
    }
    ?>

    <footer>
        <span>Organization X copyright © by Group2_L01</span>
    </footer>

</body>

</html>