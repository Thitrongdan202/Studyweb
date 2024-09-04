<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ Checkbox trong PHP</title>
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
            width: 300px;
            text-align: center;
        }

        .form-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .form-container label {
            display: block;
            margin: 10px 0;
            font-size: 16px;
            color: #555;
        }

        .form-container button {
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #28a745;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #218838;
        }

        .result {
            margin-top: 20px;
            color: #333;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Chọn sở thích</h2>
    <form action="checkbox_example.php" method="post">
        <label>
            <input type="checkbox" name="hobbies[]" value="Đọc sách"> Đọc sách
        </label>
        <label>
            <input type="checkbox" name="hobbies[]" value="Du lịch"> Du lịch
        </label>
        <label>
            <input type="checkbox" name="hobbies[]" value="Thể thao"> Thể thao
        </label>
        <label>
            <input type="checkbox" name="hobbies[]" value="Xem phim"> Xem phim
        </label>
        <button type="submit">Gửi</button>
    </form>

    <?php
    // Kiểm tra xem dữ liệu có được gửi qua hay không
    if (isset($_POST['hobbies'])) {
        $hobbies = $_POST['hobbies']; // Lấy dữ liệu từ checkbox
        echo "<div class='result'><strong>Sở thích của bạn:</strong> " . implode(", ", $hobbies) . "</div>";
    } else {
        echo "<div class='result'>Bạn chưa chọn sở thích nào.</div>";
    }
    ?>
</div>

</body>
</html>
