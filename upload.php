<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tải Lên Hình Ảnh</title>
    <script
      src="https://kit.fontawesome.com/98ddc7f134.js"
      crossorigin="anonymous"
    ></script>

</head>
<body>
    <h2>Tải Lên Công Việc</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="title">Tiêu Đề:</label>
        <input type="text" name="title" required><br>

        <label for="company">Công Ty:</label>
        <input type="text" name="company" required><br>

        <label for="location">Địa Điểm:</label>
        <input type="text" name="location" required><br>

        <label for="description">Mô Tả:</label>
        <textarea name="description" required></textarea><br>

        <label for="url">Liên Kết:</label>
        <input type="text" name="url" required><br>

        <label for="image">Chọn Hình Ảnh:</label>
        <input type="file" name="image" accept="image/*" required><br>

        <button type="submit">Tải Lên</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'config.php'; // Kết nối đến cơ sở dữ liệu

        // Lấy dữ liệu từ form
        $title = $_POST['title'];
        $company = $_POST['company'];
        $location = $_POST['location'];
        $description = $_POST['description'];
        $url = $_POST['url'];

        // Xử lý hình ảnh
        $image = $_FILES['image'];
        $imagePath = 'uploads/' . basename($image['name']);

        // Kiểm tra và tải lên hình ảnh
        if (move_uploaded_file($image['tmp_name'], $imagePath)) {
            // Chèn dữ liệu vào cơ sở dữ liệu
            $sql = "INSERT INTO jobs (title, company, location, description, url, image_url) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$title, $company, $location, $description, $url, $imagePath]);

            echo "Đã thêm công việc thành công!";
        } else {
            echo "Lỗi tải lên hình ảnh.";
        }
    }
    ?>
</body>
</html>