<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCP</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="nav nav-pills nav-fill nav-tabs">
            <a class="nav-item nav-link" href="../homepage/homepage.php">TRANG CHỦ</a>
            <a class="nav-item nav-link" href="../Dashboard/dashboard.php">DASHBOARD</a>
            <a class="nav-item nav-link" href="../Nhanvien/index.php">NHÂN VIÊN</a>
            <a class="nav-item nav-link" href="../Phuongtien/vehicle.php">PHƯƠNG TIỆN</a>
            <a class="nav-item nav-link" href="../MCPs/manage_mcps.php">QUẢN LÝ MCPs</a>
            <a class="nav-item nav-link active" href="../GiaoCongViec/gcv_tr.php">GIAO CÔNG VIỆC</a>
			<a class="nav-item nav-link" href="../TienDo/tiendo.html">BÁO CÁO TIẾN ĐỘ</a>
            <a class="nav-item nav-link" href="../index.html">ĐĂNG XUẤT</a>
        </nav>
    </header>

    <div class="content">
        <h3 class="text-center"> Tình trạng nhiệm vụ </h3>

        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="gcv.html"><input class="btn btn-primary" type="button" value="Giao nhiệm vụ"></a>
                </div>

                <div class="col input-group mb-3">
                    <select class="custom-select">
                        <option selected>Lọc theo khu vực</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
                <div class="col input-group mb-3">
                    <select class="custom-select">
                        <option selected>Lọc theo trạng thái</option>
                        <option value="0">Đang làm</option>
                        <option value="1">Trống</option>
                    </select>
                </div>
            </div>
        </div>

        <table class="table table-bordered table-hover">
            <tr class="thead- text-center">
                <th>ID</th>
                <th>Tên nhân viên</th>
                <th>Tiến độ</th>
                <th>Trạng thái</th>
                <th>Hoạt động</th>
            </tr>

            <tr>
                <td>1</td>
                <td>Nguyễn văn A</td>
                <td> 50 %</td>
                <td>Đang tiên hành</td>
                <td>
                    <a class="btn btn-success" href="#">Cập nhật</a>
                    <a class="btn btn-danger" href="#">Xóa</a>
                </td>
            </tr>
        </table>

        <div>
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div>
    </div>
</body>
</html>