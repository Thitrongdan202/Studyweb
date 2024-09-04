<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="get" action="#">
            Mã ca si <input type="text" name="macasi"></input><br>
            Tên ca si <input type="text" name="tencasi"></input><br>
            Giới tính <input type="checkbox" name="gioitinh"></input><br>
            <input type="Submit" name="Submit" value="Thêm">
        </form>
        <?php
             if(isset($_GET['Submit'])&&($_GET['Submit']=="Thêm"))
            {
                include "connect.php";
                $macasi=$_GET['macasi'];
                $tencasi=$_GET['tencasi'];
                
                if(isset($_GET['gioitinh']))
                    $gioitinh=1;
                else
                    $gioitinh = 0;
                
                $str = "insert into casi values('$macasi','$tencasi','$gioitinh')";
                if($connect->query($str)==true)
                    echo "insert thành công";
                else
                    echo "insert không thành công";
                $connect->close();
            }
        ?>
        <br><a href="index.php">Quay về trang chủ </a>
    </body>
</html>
