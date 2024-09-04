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
            while($rows = $results->fetch_assoc())
            {
                echo $rows['MaCaSi']." - ".$rows['TenCaSi']."<br />";
            }
            echo "Số dòng truy xuất được". $results->num_rows; 
            //Đóng kết nối CSDL.
            $connect->close();

        ?>
    </body>
</html>
