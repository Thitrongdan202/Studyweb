<?php $t="1111";
      setcookie("a",$t)

?>
<html> 
<body>    
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
    <title>Trang a</title>
</head>
gia tri ghi lên cookies:
<?php
        echo $t
?>                
<a href ="b.php"> qua trang b
</body>
</html>