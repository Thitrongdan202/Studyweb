<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ Listbox trong PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }

        .form-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .form-container select {
            padding: 8px;
            width: 100%;
            height: 150px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        .form-container button {
            padding: 10px 15px;
            background-color: #007bff;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            color: #333;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Chọn món ăn yêu thích</h2>
    <form action="listbox_example.php" method="post">
        <select name="foods[]" multiple>
            <option value="Bún bò">Bún bò</option>
            <option value="Phở">Phở</option>
            <option value="Cơm tấm">Cơm tấm</option>
            <option value="Gỏi cuốn">Gỏi cuốn</option>
            <option value="Hủ tiếu">Hủ tiếu</option>
        </select>
        <button type="submit">Gửi</button>
    </form>

    <?php
    // Kiểm tra xem dữ liệu có được gửi qua hay không
    if (isset($_POST['foods']) && is_array($_POST['foods'])) {
        $foods = $_POST['foods']; // Lấy mảng dữ liệu từ listbox
        echo "<div class='result'><strong>Các món ăn bạn chọn:</strong><ul>";
        foreach ($foods as $food) {
            echo "<li>" . htmlspecialchars($food) . "</li>";
        }
        echo "</ul></div>";
    } else {
        echo "<div class='result'>Bạn chưa chọn món ăn nào.</div>";
    }
    ?>
</div>

</body>
</html>
