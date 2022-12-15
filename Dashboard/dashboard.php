<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="../header/template.css">
    <title>UWC2.0</title>
</head>

<body>
	<?php include '../header/header.php';?>
    <div class="title">TRANG CHỦ/ DASHBOARD</div>

    <a href="#">
        <span class="goto pic1">
            <img src="./images/MCPs.png"><br>
            <text>QUẢN LÝ MCPS</text>
        </span>
    </a>

    <a href="#">
        <span class="goto pic2">
            <img src="./images/staff.png"><br>
            <text>QUẢN LÝ NHÂN VIÊN</text>
        </span>
    </a>

    <a href="#">
        <span class="goto pic3">
            <img src="./images/update.png"><br>
            <text>CẬP NHẬT</text>
        </span>
    </a>

    <a href="#">
        <span class="goto pic4">
            <img src="./images/vehicle.png"><br>
            <text>QUẢN LÝ PHƯƠNG TIÊN</text>
        </span>
    </a>

    <a href="#">
        <span class="goto pic5">
            <img src="./images/task.png"><br>
            <text>GIAO NHIỆM VỤ</text>
        </span>
    </a>
    <img src="./images/schedule.png" class="sched">
    <span class="task-status">
        <div class="head">HIỆN TRẠNG NHIỆM VỤ</div>
        <div>
            <span class="task">Nhiệm vụ 1: Xếp lịch làm việc</span>
            <span>Tình trạng: Hoàn thành</span>
        </div>
        <div>
            <span class="task">Nhiệm vụ 2: Kiểm tra tuyến đường</span>
            <span>Tình trạng: Hoàn thành</span>
        </div>
        <div>
            <span class="task">Nhiệm vụ 3: Giao nhiệm vụ cho nhân viên</span>
            <span>Tình trạng: Chưa hoàn thành</span>
        </div>

    </span>

    <footer>
        <span>Organization X copyright © by Group2_L01</span>
    </footer>

</body>

</html>