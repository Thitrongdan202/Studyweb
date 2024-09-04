<?php
// Kiểm tra nếu người dùng đã gửi form
if (isset($_POST['submit'])) {
    // Lấy dữ liệu từ form
    $username = $_POST['username'];
    
    // Tạo cookie tên 'user' với giá trị là tên người dùng và thời gian sống 1 giờ
    setcookie('user', $username, time() + 3600, "/"); // 3600 giây = 1 giờ

    // Thông báo đã tạo cookie
    echo "Cookie đã được tạo! <br>";
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Ví dụ về Cookies</title>
</head>
<body>

<h2>Nhập tên của bạn để lưu vào Cookie:</h2>
<form method="post" action="cookies_example.php">
    <input type="text" name="username" placeholder="Nhập tên..." required>
    <button type="submit" name="submit">Lưu vào Cookie</button>
</form>

<?php
// Kiểm tra nếu cookie 'user' tồn tại
if (isset($_COOKIE['user'])) {
    echo "<p>Xin chào, " . htmlspecialchars($_COOKIE['user']) . "! Đây là thông tin từ cookie.</p>";
}
?>

</body>
</html>
