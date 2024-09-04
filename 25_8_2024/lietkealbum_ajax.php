<?php
    $macasi = $_POST['macasi'];
    include "connect.php";
    $sql = "SELECT * FROM album where MaCaSi='$macasi'";
    $results = $connect->query($sql);
    echo "<table border='1'>";
    echo "<tr><th>Mã album</th><th>Tên album</th></tr>";
    while($rows = $results->fetch_row())
    {   echo "<tr>";
            echo "<td>$rows[0]</td><td>$rows[1]</td>";
        echo "</tr>";
    }
    echo "</table>";
    $connect->close();
?>