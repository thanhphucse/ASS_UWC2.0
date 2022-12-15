<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="vehicle.css">
    <link rel="stylesheet" href="template.css">
    <title>Phương tiện - Trang chính</title>
</head>

<body>
    <?php include "header.php"; ?>
    <section>
        <h2>TRANG CHỦ / PHƯƠNG TIỆN</h2>
        <div id="general-vehicle">
            <form>
                <input type="search" placeholder="Tìm theo mã số phương tiện"><br>
                <label>Phân nhóm:</label>
                <select>
                    <option>Tất cả</option>
                    <option>Cỡ lớn</option>
                    <option>Cỡ vừa</option>
                    <option>Cỡ nhỏ</option>
                </select><br>
                <label>Tình trạng:</label>
                <select>
                    <option>Tất cả</option>
                    <option>Còn mới</option>
                    <option>Hỏng</option>
                    <option>Đang sửa chữa</option>
                </select><br>
                <label>Hạn đăng kiểm:</label>
                <select>
                    <option>Tất cả</option>
                    <option>Đã hết hạn</option>
                    <option>Còn hạn</option>
                </select>
                <div id="filter">
                    <button>Lọc</button>
                </div>
            </form>
            <div class="vehicle-img">
                <img src="./images/L028.png">
                <div class="brief">
                    Mã số phương tiện: L028 <br>
                    Sức chứa: 9 m<sup>3</sup><br>
                    <a href="#"><button>Xem chi tiết</button></a>
                </div>
            </div>
            <form>
                <h4>Thông tin quan trọng</h4>
                <div class="notice">
                    Phương tiện L021 bị hỏng lốp, đến hạn bảo dưỡng định kỳ.
                </div>
                <div class="notice">
                    Phương tiện L011 cần thay mới cần gạt nước.
                </div>
            </form>
        </div>
    </section>

    <footer>
        <span>Organization X copyright © by Group2_L01</span>
    </footer>

</body>

</html>