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
            include "connect.php";
            $sql = "SELECT * FROM casi";
            $results = $connect->query($sql);
            echo "<form method='get' action='#'>";
                echo "Tên ca sĩ <select name='macasi'>";
                while($rows = $results->fetch_row())
                {
                    echo "<option value='$rows[0]'>$rows[1]</option>";
                }
               echo "</select><br>"; 
               echo "Mã album <input type='text' name='maalbum'><br>";
               echo "Tên album <input type='text' name='tenalbum'><br>";
               echo "<input type='Submit' name='Submit' value='Thêm'>";
            echo "</form>";
            
            if(isset($_GET['Submit'])&&($_GET['Submit']=="Thêm"))
            {
                $maalbum=$_GET['maalbum'];
                $tenalbum=$_GET['tenalbum'];
                $macasi=$_GET['macasi'];
                $str = "insert into album values('$maalbum','$tenalbum','$macasi')";
                if($connect->query($str)==true)
                    echo "insert thành công";
                else
                    echo "insert không thành công";
            }
            $connect->close();
            
        ?>
    </body>
</html>
