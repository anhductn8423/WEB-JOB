<?php
$servername = "localhost";
$username = "root"; // Tên người dùng mặc định
$password = ""; // Mật khẩu mặc định
$dbname = "job_portal"; // Tên cơ sở dữ liệu

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
echo "Kết nối thành công!";
$conn->close();
?>