<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-form {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .login-form h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background: #4CAF50;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
        }

        .login-form button:hover {
            background: #45a049;
        }

        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }

        .success {
            color: green;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="login-form">
    <h2>Login</h2>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Đăng nhập</button>
    </form>

    <?php
    // Check if the form is submitted using POST
    if (isset($_POST['login'])) {
        // Get the username and password using POST method
        $username = $_POST['username'];
        $password = $_POST['password'];
        handleLogin($username, $password, 'POST');
    }

    // Check if data is passed via GET
    if (isset($_GET['username']) && isset($_GET['password'])) {
        // Get the username and password using GET method
        $username = $_GET['username'];
        $password = $_GET['password'];
        handleLogin($username, $password, 'GET');
    }

    // Check if data is passed via REQUEST (handles both GET and POST)
    if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
        // Get the username and password using REQUEST method
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        handleLogin($username, $password, 'REQUEST');
    }

    // Function to handle login
    function handleLogin($username, $password, $method) {
        // Example: Set a predefined username and password
        $validUsername = 'admin';
        $validPassword = '123456';

        // Check if the username and password are correct
        if ($username === $validUsername && $password === $validPassword) {
            echo "<p class='success'>Đăng nhập thành công bằng phương thức $method!</p>";
        } else {
            echo "<p class='error'>Tên đăng nhập hoặc mật khẩu không đúng bằng phương thức $method!</p>";
        }
    }
    ?>
</div>

</body>
</html>
