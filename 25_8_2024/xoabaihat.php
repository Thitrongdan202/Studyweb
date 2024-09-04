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
        <form method="get">
            Mã bài hát<input type="text" name='mabaihat'></input><br>
            <input type="Submit" name='Submit' value='Xóa'>
        </form>
        <?php
            if(isset($_GET['Submit'])&&($_GET['Submit']=="Xóa"))
            {
                include "connect.php";
                $mabaihat = $_GET['mabaihat'];
                $str = "delete from baihat where MaBaiHat='$mabaihat'";
                if($connect->query($str)>0)
                    echo "Delete thành công";
                else
                    echo "Delete không thành công";
                $connect->close();

            }
        ?>
    </body>
</html>
