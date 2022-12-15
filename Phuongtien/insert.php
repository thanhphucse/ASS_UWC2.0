<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="insert.css">
    <link rel="stylesheet" href="template.css">
    <title>Phương tiện - Thêm mới</title>
</head>

<body>
    <?php include "header.php"; ?>
    <section>
        <h2>TRANG CHỦ / PHƯƠNG TIỆN / THÊM MỚI</h2>
        <div id="new-vehicle">
            <div>
                <div class="new-image">
                    <img src="./images/default_vehicle.png">
                </div>
                <input id="img-link" type="text" placeholder="Đường dẫn hình ảnh phương tiện" onfocusout="addImage()"><br>
                <button>Thêm mới</button>
            </div>
            <form>
                <label>Mã số phương tiện</label>
                <input type="text" value="L028" disabled><br>
                <label>Hãng</label>
                <select>
                    <option>Huyndai</option>
                    <option>Thaco</option>
                    <option>Mercedes</option>
                </select><br>
                <label>Biển số xe</label>
                <input type="text"><br>
                <label>Loại động cơ</label>
                <select>
                    <option>Xăng</option>
                    <option>Dầu</option>
                </select><br>
                <label>Trọng lượng</label>
                <input type="number" step="any" min="0"> tấn <br>
                <label>Sức chứa</label>
                <input type="number" step="any" min="0"> m<sup>3</sup><br>
                <label>Tiêu thụ nhiên liệu</label>
                <input type="number" step="any" min="5"> lít / 100 km <br>
                <label>Hạn đăng kiểm</label>
                <input type="date"><br>
                <label>Tình trạng</label>
                <select>
                    <option>Còn mới</option>
                    <option>Hỏng</option>
                    <option>Đang sửa chữa</option>
                </select>
            </form>
        </div>
    </section>

    <footer>
        <span>Organization X copyright © by Group2_L01</span>
    </footer>

    <script>
        function addImage(){
            let url = document.getElementById("img-link").value;
            let e = document.getElementsByClassName("new-image")[0];
            e.getElementsByTagName("img")[0].src = url;
        }
    </script>

</body>

</html>