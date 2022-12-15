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
        <p style="text-align: center; font-weight: bold">TRANG CHỦ/NHÂN VIÊN/CHI TIẾT</p>
    </header>

    <div class="container" style="width: 1000px; height: 500px">
        <div class="sub_sub_header" style="width: 100%;">
            <div class="add_staff">
                <a href="form_add.php"><button type="button" class="add_staff_button">Thêm nhân viên mới</button></a>
            </div>
            <div class="fillter" style="display: none;">
                <img src="images/fill_staff.jpg" alt="fillstaff.jpg" style="width: 80%">
            </div>
            <div class="search">
                <img src="images/search_staff.jpg" alt="search_staff.jpg" style="width: 80%;">
            </div>
        </div>
        <br></br><br></br><br></br>
        <div style="width: 100%;">
            <div style="text-align:left; display: inline-block; width: 49%; padding-left: 80px;">
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
            </div>
            <div style="width: 100%; text-align:center; padding-right: 500px;">
                <a href="edit_form.php?id=<?php echo $row["ID"]; ?>"><button class="edit" "type=" button">cập nhật</button></a>
                <a href="delete.php?id=<?php echo $row["ID"]; ?>"><button class="delete" "type=" button">xóa</button></a>
                <a href="work_calender.php?id=<?php echo $row["ID"]; ?>"><button class="calender" type="button">lịch làm việc</button></a>
                <a href="send_message.php?id=<?php echo $row["ID"]; ?>"><button class="message" type="button">gửi tin nhắn</button></a>
            </div>
        </div>

    </div>


    <footer>
        <span>Organization X copyright © by Group2_L01</span>
    </footer>

</body>

</html>