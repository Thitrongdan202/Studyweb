<?php 
     session_start();
?>
<html>
    <head>
        <meta http-equiv="Content_Type" content="text/html"; charset="utf-8"/>
        <title>Untitled Document</title>
    </head>
    <body>
        Giá trị session lấy được
        <a href="a.php">file a.php</a>:<br>
        username = <?php echo $_SESSION['username']; ?><br>
        time = <?php echo $_SESSION['password']; ?>
    </body>    
</html>