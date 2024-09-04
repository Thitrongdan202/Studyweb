<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ GET, POST và REQUEST trong PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
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
        }

        .form-container h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background: #4CAF50;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
        }

        .form-container button:hover {
            background: #45a049;
        }

        .result {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Form với GET, POST và REQUEST</h2>
    
    <!-- Form sử dụng phương thức GET -->
    <form action="form_example.php" method="get">
        <input type="text" name="get_name" placeholder="Nhập tên (GET)" required>
        <button type="submit">Gửi GET</button>
    </form>

    <!-- Form sử dụng phương thức POST -->
    <form action="form_example.php" method="post">
        <input type="text" name="post_name" placeholder="Nhập tên (POST)" required>
        <button type="submit">Gửi POST</button>
    </form>

    <!-- Form sử dụng REQUEST để lấy cả GET và POST -->
    <form action="form_example.php" method="post">
        <input type="text" name="request_name" placeholder="Nhập tên (REQUEST)" required>
        <button type="submit">Gửi REQUEST</button>
    </form>

    <!-- Xử lý dữ liệu từ GET -->
    <?php
    if (isset($_GET['get_name'])) {
        $get_name = $_GET['get_name'];
        echo "<p class='result'>Chào, $get_name! (GET)</p>";
    }

    // Xử lý dữ liệu từ POST
    if (isset($_POST['post_name'])) {
        $post_name = $_POST['post_name'];
        echo "<p class='result'>Chào, $post_name! (POST)</p>";
    }

    // Xử lý dữ liệu từ REQUEST (lấy cả GET và POST)
    if (isset($_REQUEST['request_name'])) {
        $request_name = $_REQUEST['request_name'];
        echo "<p class='result'>Chào, $request_name! (REQUEST)</p>";
    }
    ?>
</div>

</body>
</html>
