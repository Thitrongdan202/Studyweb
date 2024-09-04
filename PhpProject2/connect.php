<?php
// Kết nối tới MySQL
$connect = new mysqli('localhost', 'root', '', 'quanlycasi');

// Kiểm tra kết nối
if ($connect->connect_error) {
    die("Kết nối thất bại: " . $connect->connect_error);
}

// Chọn hệ ký tự là utf8 để có thể in ra tiếng Việt
$connect->set_charset('utf8');
?>