<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="detail.css">
    <link rel="stylesheet" href="template.css">
    <title>Phương tiện - Chi tiết</title>
</head>

<body>
    <?php include "header.php"; ?>
    <section>
        <h2>TRANG CHỦ / PHƯƠNG TIỆN / CHI TIẾT</h2>
        <a href="#" id="back">Quay lại</a>
        <div id="vehicle">
            <div>
                <img src="https://img.freepik.com/premium-photo/garbage-trucks-into-waste-emptying-containers-waste-disposal-isolate-white-background_454892-166.jpg?w=2000">
                <div class="edit">
                    <button onclick="editVehicle()">Chỉnh sửa thông tin</button><br>
                    <a href="#"><button>Gán nhân viên</button></a><br>
                </div>
            </div>
            <div class="detail">
                Mã số phương tiện: L028 <br>
                Hãng: Huyndai <br>
                Biển số xe: 59H - 405.84 <br>
                Loại động cơ: Diesel <br>
                Trọng lượng: 3.5 tấn <br>
                Sức chứa: 9 m<sup>3</sup> <br>
                Tiêu thụ nhiên liệu: 11.5 lít / 100 km <br>
                Hạn đăng kiểm: 28/06/2023 <br>
                Tình trạng: <input type="text" value="Còn mới" disabled><br>
                <button id="change" onclick="changeInfo()">Lưu thay đổi</button>
            </div>
            <div>
                Lịch hoạt động: 
                <table>
                    <tr>
                        <td>Thứ 2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Thứ 3</td>
                        <td></td>
                        <td><i class="fas fa-truck"></i></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Thứ 4</td>
                        <td><i class="fas fa-truck"></i></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Thứ 5</td>
                        <td><i class="fas fa-truck"></i></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Thứ 6</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Thứ 7</td>
                        <td></td>
                        <td></td>
                        <td><i class="fas fa-truck"></i></td>
                    </tr>
                    <tr>
                        <td>Chủ nhật</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    <footer>
        <span>Organization X copyright © by Group2_L01</span>
    </footer>
    
    <script src="detail.js"></script>
</body>

</html>