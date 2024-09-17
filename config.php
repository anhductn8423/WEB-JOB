<?php
$host = 'localhost';
$db = 'job_portal'; // Tên cơ sở dữ liệu của bạn
$user = 'root'; // Tên người dùng MySQL
$pass = ''; // Mật khẩu MySQL (để trống nếu bạn chưa đặt mật khẩu)

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Kết nối thất bại: " . $e->getMessage());
}
?>