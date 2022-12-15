<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="staff.css">
    <link href="template.css" rel="stylesheet">
    </link>
    <title>Document</title>
</head>

<body>
    <header>
        <div class="inner-header">
            <span class="menu">
                <li><img src="./images/home.png" width="30px" class="icon"> <a href="../homepage/homepage.php">TRANG CHỦ
                    </a>
                </li>
                <li><a href="../Dashboard/dashboard.php">DASHBOARD</a> </li>
                <li><a href="../Nhanvien/index.php">NHÂN VIÊN</a> </li>
                <li><a href="../Phuongtien/vehicle.php">PHƯƠNG TIỆN</a> </li>
                <li><a href="../MCPs/manage_mcps.php">QUẢN LÝ MCPs</a> </li>
                <li><a href="../GiaoCongViec/gcv_tr.php">GIAO CÔNG VIỆC</a> </li>
				 <li><a href="="../TienDo/tiendo.html">BÁO CÁO</a> </li>
                <li><img src="./images/user.png" width="30px" class="icon"><a href="../index.html">ĐĂNG XUẤT</a> </li>
            </span>
        </div>
        <p style="text-align: center; font-weight: bold">TRANG CHỦ/NHÂN VIÊN/THÊM NHÂN VIÊN</p>
    </header>

    <div style="width: 800px; text-align:center">
        <form action="add.php" method="post">
            <label for="">ID</label>
            <input type="number" name="id" id="col1"><br></br>
            <label for="">Full name</label>
            <input type="text" name="fullName" id="col2"><br></br>
            <label for="">User Name</label>
            <input type="text" name="userName" id="col3"><br></br>
            <label for="">TYPE</label>
            <input type="text" name="type" id="col4"><br></br>
            <label>isBackOfficer    </label>
            <input type="number" name="isBackOfficer" id="col5"><br></br>
            <input type="submit" value="Thêm nhân viên mới" id="sub" style="background-color: rgb(1, 222, 130); border-radius: 5px;">
        </form>
    </div>

    <footer>
        <span>Organization X copyright © by Group2_L01</span>
    </footer>
</body>

</html>