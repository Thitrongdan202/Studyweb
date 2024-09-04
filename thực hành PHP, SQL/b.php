<html>
<head>
    <meta http-equiv="Content_Type" content="text/html"; charset="windows-1254">        
    <title> trang b </title>
</head>    
<body>
    <a href="a.php"></a> qua trang a
<?php 
    if (isset($_COOKIE['a']))
    {
              echo "gia tri lay duoc".$_COOKIE['a'];
    }
    else
              echo "khong lay duoc";
?>
</body>
</html>