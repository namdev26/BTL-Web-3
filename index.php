<?php
// Dữ liệu giả lập (tĩnh)
$employees = [
    ['id' => 1, 'name' => 'Nguyen Van A', 'department' => 'CNTT', 'position' => 'Developer', 'start_date' => '2023-01-15', 'status' => 'Đang làm việc'],
    ['id' => 2, 'name' => 'Tran Thi B', 'department' => 'Thiết kế', 'position' => 'Designer', 'start_date' => '2022-06-20', 'status' => 'Đang làm việc'],
    ['id' => 3, 'name' => 'Le Van C', 'department' => 'Quản lý', 'position' => 'Manager', 'start_date' => '2021-03-10', 'status' => 'Nghỉ phép'],
];

$topEmployees = [
    ['name' => 'Tran Thi B', 'position' => 'Designer', 'rank' => 'TOP 1', 'image' => 'Image/NV1.jpg'],
    ['name' => 'Nguyen Van A', 'position' => 'Developer', 'rank' => 'TOP 2', 'image' => 'Image/NV1.jpg'],
    ['name' => 'Le Van C', 'position' => 'Manager', 'rank' => 'TOP 3', 'image' => 'Image/NV1.jpg'],
];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <div class="logo">EmployeeSys</div>
        <div class="search-bar">
            <input type="text" placeholder="Tìm kiếm nhân viên...">
        </div>
        <div class="nav">
            <a href="#" class="active">Dashboard</a>
            <a href="#">Employees</a>
            <a href="#">Performance</a>
            <a href="#">Leave</a>
            <a href="#">Settings</a>
            <div class="dropdown">
                <a href="#" class="dropbtn">More</a>
                <div class="dropdown-content">
                    <a href="#">Payroll</a>
                    <a href="#">Training</a>
                    <a href="#">Support</a>
                </div>
            </div>
        </div>
        <div class="user-info">
            <button class="btn-login">Đăng nhập</button>
            <button class="btn-register">Đăng ký</button>
        </div>
    </div>
    <div class="hero">
        <div class="hero-content">
            <h1>Quản lý nhân viên hiệu quả</h1>
            <p>Hệ thống quản lý nhân viên hiện đại, giúp tối ưu hóa quy trình quản lý, theo dõi hiệu suất và phê duyệt nghỉ phép.</p>
            <div class="hero-buttons">
                <a href="#">Khám phá</a>
                <a href="#">Bắt đầu</a>
            </div>
        </div>
        <div class="nft-card">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAACklEQVR4nGMAAQAABQABDQottAAAAABJRU5ErkJggg==" alt="Company Logo">
            <div class="details">
                <p>EmployeeSys</p>
                <p>Version 1.0</p>
                <p class="likes">❤️ 150</p>
            </div>
        </div>
    </div>
    <div class="top-employees">
        <h2>Top 3 nhân viên xuất sắc của tháng</h2>
        <div class="employee-list">
            <?php foreach ($topEmployees as $employee): ?>
                <div class="employee-card">
                    <img src="<?php echo $employee['image']; ?>" alt="<?php echo $employee['name']; ?>">
                    <h4><?php echo $employee['rank']; ?></h4>
                    <h3><?php echo $employee['name']; ?></h3>
                    <p><?php echo $employee['position']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="employee-management">
        <h2>Danh sách nhân viên</h2>
        <div class="employee-table">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Phòng ban</th>
                        <th>Vị trí</th>
                        <th>Ngày vào làm</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($employees as $employee): ?>
                        <tr>
                            <td><?php echo $employee['id']; ?></td>
                            <td><?php echo $employee['name']; ?></td>
                            <td><?php echo $employee['department']; ?></td>
                            <td><?php echo $employee['position']; ?></td>
                            <td><?php echo $employee['start_date']; ?></td>
                            <td><?php echo $employee['status']; ?></td>
                            <td>
                                <a href="?page=edit&id=<?php echo $employee['id']; ?>" class="btn-edit">Sửa</a>
                                <a href="#" class="btn-delete" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="employee-actions">
            <button class="btn-add" onclick="document.getElementById('addForm').style.display='block'">Thêm nhân viên</button>
            <?php if (isset($_GET['page']) && $_GET['page'] == 'edit' && isset($_GET['id'])): ?>
                <div id="editForm" class="form-popup" style="display:block;">
                    <form class="form-container">
                        <h3>Sửa thông tin nhân viên</h3>
                        <label>Tên:</label>
                        <input type="text" value="Nguyen Van A" required>
                        <label>Phòng ban:</label>
                        <input type="text" value="CNTT" required>
                        <label>Vị trí:</label>
                        <input type="text" value="Developer" required>
                        <label>Ngày vào làm:</label>
                        <input type="date" value="2023-01-15" required>
                        <label>Trạng thái:</label>
                        <select>
                            <option value="Đang làm việc" selected>Đang làm việc</option>
                            <option value="Nghỉ phép">Nghỉ phép</option>
                            <option value="Nghỉ việc">Nghỉ việc</option>
                        </select>
                        <button type="submit" class="btn">Cập nhật</button>
                        <button type="button" class="btn-cancel" onclick="document.getElementById('editForm').style.display='none'">Hủy</button>
                    </form>
                </div>
            <?php endif; ?>
            <div id="addForm" class="form-popup" style="display:none;">
                <form class="form-container">
                    <h3>Thêm nhân viên mới</h3>
                    <label>Tên:</label>
                    <input type="text" name="name" required>
                    <label>Phòng ban:</label>
                    <input type="text" name="department" required>
                    <label>Vị trí:</label>
                    <input type="text" name="position" required>
                    <label>Ngày vào làm:</label>
                    <input type="date" name="start_date" required>
                    <label>Trạng thái:</label>
                    <select name="status">
                        <option value="Đang làm việc">Đang làm việc</option>
                        <option value="Nghỉ phép">Nghỉ phép</option>
                        <option value="Nghỉ việc">Nghỉ việc</option>
                    </select>
                    <button type="submit" class="btn">Thêm</button>
                    <button type="button" class="btn-cancel" onclick="document.getElementById('addForm').style.display='none'">Hủy</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>