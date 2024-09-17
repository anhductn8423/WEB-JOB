<?php
        include 'config.php';

        $sql = "SELECT * FROM jobs";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Hình Ảnh</th><th>Tiêu Đề</th><th>Công Ty</th><th>Địa Điểm</th><th>Mô Tả</th><th>Liên Kết</th></tr>";
            // Xuất dữ liệu cho mỗi hàng
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td><img src='" . $row["image_url"] . "' alt='" . $row["title"] . "' style='width: 100px; height: auto;'></td>";
                echo "<td>" . $row["title"] . "</td>";
                echo "<td>" . $row["company"] . "</td>";
                echo "<td>" . $row["location"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "<td><a href='" . $row["url"] . "' target='_blank'>Xem Chi Tiết</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Không có công việc nào.";
        }

        $conn->close();
        ?>