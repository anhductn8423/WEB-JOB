<?php
include 'config.php'; // Kết nối đến cơ sở dữ liệu

// Dữ liệu từ hình ảnh
$title = "Backend developer";
$company = "abbank";
$location = "Hà Nội";
$description = ""; // Bạn có thể thêm mô tả nếu cần
$url = "https://www.abbank.vn/";
$imagePath = ""; // Nếu không có hình ảnh

// Chèn dữ liệu vào cơ sở dữ liệu
$sql = "INSERT INTO jobs (title, company, location, description, url, image_url) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $title, $company, $location, $description, $url, $imagePath);

if ($stmt->execute()) {
    echo "Đã thêm công việc thành công!";
} else {
    echo "Lỗi: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>