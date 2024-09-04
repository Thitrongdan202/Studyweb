<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include "connect.php";
            $tencasi =$_POST['ten'];
            $sql = "SELECT * FROM casi where TenCaSi='$tencasi'";
            $results = $connect->query($sql);
            if($results->num_rows>0)
               echo "Tim thấy";
            else
                echo "Tìm không thấy";
        ?>
    </body>
</html>
