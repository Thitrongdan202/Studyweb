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
        <?php
            $mabaihat=$_GET['mabaihat'];
            //echo $mabaihat;
            include "connect.php";
            $sql = "SELECT * FROM baihat where MaBaiHat='$mabaihat'";
            $results = $connect->query($sql);
            echo "<form method='get'>";
            while($rows = $results->fetch_row())
            {
                echo "Mã bài hát";
                echo "<input type='text' name ='mabaihat' value='$rows[0]'></input><br>";
                echo "Tên bài hát";
                echo "<input type='text' name ='tenbaihat' value='$rows[1]'></input><br>";
                echo "Thể loại";
                echo "<input type='text' name ='theloai' value='$rows[2]'></input><br>";
                echo "<input type='Submit' name='Submit' value='Update'>";
            }
            echo "</form>";
            
            if(isset($_GET['Submit'])&&($_GET['Submit']=="Update"))
            {
                 $tenbaihat =$_GET['tenbaihat'];
                $theloai = $_GET['theloai'];
                $str = "update baihat set TenBaiHat='$tenbaihat', TheLoai='$theloai' where MaBaiHat='$mabaihat'";
                if($connect->query($str)>0)
                    echo "update thành công";
                else
                    echo "update không thành công";
                $connect->close();

            }
        ?>
    </body>
</html>
