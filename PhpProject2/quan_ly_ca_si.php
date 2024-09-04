<?php
// Kết nối tới MySQL
$connect = new mysqli('localhost', 'root', '', 'quanlycasi');

// Kiểm tra kết nối
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// Chọn hệ ký tự là utf8 để có thể in ra tiếng Việt
$connect->set_charset('utf8');

// Truy vấn dữ liệu từ bảng ca sĩ (ví dụ: 'casi')
$sql = "SELECT * FROM casi"; // thay 'casi' bằng tên bảng trong file SQL của bạn
$result = $connect->query($sql);

// Kiểm tra và hiển thị kết quả
if ($result->num_rows > 0) {
    // Xuất kết quả từng hàng
    while ($row = $result->fetch_assoc()) {
        echo "Mã ca sĩ: " . $row['macasi'] . " - Tên ca sĩ: " . $row['tencasi'] . "<br>";
    }
} else {
    echo "0 kết quả.";
}

// Đóng kết nối
$connect->close();
?>
