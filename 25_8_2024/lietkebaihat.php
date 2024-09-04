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
            $sql = "SELECT * FROM baihat";
            $results = $connect->query($sql);
            echo "<table border='1'>";
            echo "<tr><th>Mã bài hát</th><th>Tên bài hát</th><th>Chức năng</th></tr>";
            while($rows = $results->fetch_row())
            {
                echo "<tr>";
                    echo "<td>$rows[0]</td>";
                    echo "<td>$rows[1]</td><td><a href='viewbaihat.php?mabaihat=$rows[0]'>View</a> ";
                    echo "<a href='delete.php?mabaihat=$rows[0]'> Delete</a></td>";
                echo "</tr>";
            }
            echo "</table>";
            $connect->close();
        ?>
    </body>
</html>
