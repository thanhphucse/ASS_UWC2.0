<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="template.css" rel="stylesheet"></link>
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

    <form action="add.php" method="post">
        ID <input type="number" name="id" id="col1">
        Full name<input type="text" name="fullName" id="col2">
        User Name <input type="text" name="userName" id="col3">
        TYPE <input type="text" name="type" id="col4">
        isBackOfficer <input type="number" name="isBackOfficer" id="col5">
        <input type="submit" value="Thêm nhân viên mới" id="sub">
    </form>

    <footer>
        <span>Organization X copyright © by Group2_L01</span>
    </footer>
</body>

</html>