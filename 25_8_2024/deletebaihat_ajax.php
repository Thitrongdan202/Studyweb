<?php
    $mabaihat=$_POST['mabaihat'];
    echo $mabaihat;
    include "connect.php";
    $str = "delete from baihat where MaBaiHat='$mabaihat'";
    $connect->query($str);
    $connect->close();
?>