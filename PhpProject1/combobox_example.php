<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ Combobox trong PHP</title>
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

        .form-container select {
            padding: 8px;
            width: 100%;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
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
    <h2>Chọn quốc gia</h2>
    <form action="combobox_example.php" method="post">
        <select name="country">
            <option value="">--Chọn quốc gia--</option>
            <option value="Việt Nam">Việt Nam</option>
            <option value="Mỹ">Mỹ</option>
            <option value="Nhật Bản">Nhật Bản</option>
            <option value="Hàn Quốc">Hàn Quốc</option>
        </select>
        <button type="submit">Gửi</button>
    </form>

    <?php
    // Kiểm tra xem dữ liệu có được gửi qua hay không
    if (isset($_POST['country']) && !empty($_POST['country'])) {
        $country = $_POST['country']; // Lấy dữ liệu từ combobox
        echo "<div class='result'><strong>Quốc gia bạn chọn:</strong> $country</div>";
    } else {
        echo "<div class='result'>Bạn chưa chọn quốc gia.</div>";
    }
    ?>
</div>

</body>
</html>
