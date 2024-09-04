<?php
// Bắt đầu session
session_start();

// Kiểm tra nếu người dùng đã gửi form
if (isset($_POST['submit'])) {
    // Lấy dữ liệu từ form
    $username = $_POST['username'];
    
    // Lưu tên người dùng vào session
    $_SESSION['user'] = $username;

    // Thông báo đã lưu vào session
    echo "Thông tin đã được lưu vào session! <br>";
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Ví dụ về Session</title>
</head>
<body>

<h2>Nhập tên của bạn để lưu vào Session:</h2>
<form method="post" action="session_example.php">
    <input type="text" name="username" placeholder="Nhập tên..." required>
    <button type="submit" name="submit">Lưu vào Session</button>
</form>

<?php
// Kiểm tra nếu session 'user' tồn tại
if (isset($_SESSION['user'])) {
    echo "<p>Xin chào, " . htmlspecialchars($_SESSION['user']) . "! Đây là thông tin từ session.</p>";
}
?>

</body>
</html>
