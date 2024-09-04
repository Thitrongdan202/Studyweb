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
echo "<table border='1'";
echo "<tr><th>Mã ca sĩ</th><th>Tên ca sĩ</th></tr>";
while($rows = $results->fetch_rows()) 
{
    echo "<tr>";
        echo "<td>$rows[0]</td>";
        echo "<td>$rows[1] </td> ";
    echo "</tr>";
}
echo "</table>";
echo "Số dòng truy xuất được: ". $results->num_rows;
// Đóng kết nối CSDL.
$connect->close();
?>
    </body>
</html>