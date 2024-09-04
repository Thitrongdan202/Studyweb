<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ Radio Button trong PHP</title>
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
    <h2>Chọn giới tính</h2>
    <form action="radio_example.php" method="post">
        <label>
            <input type="radio" name="gender" value="Nam"> Nam
        </label>
        <label>
            <input type="radio" name="gender" value="Nữ"> Nữ
        </label>
        <label>
            <input type="radio" name="gender" value="Khác"> Khác
        </label>
        <button type="submit">Gửi</button>
    </form>

    <?php
    // Kiểm tra xem dữ liệu có được gửi qua hay không
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender']; // Lấy dữ liệu từ radio button
        echo "<div class='result'><strong>Giới tính của bạn:</strong> $gender</div>";
    } else {
        echo "<div class='result'>Bạn chưa chọn giới tính.</div>";
    }
    ?>
</div>

</body>
</html>
