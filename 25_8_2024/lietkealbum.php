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
        <script src="jquery.js"></script>
        <script>
            $(document).ready(function(){
                $(".macasi").change(function(){
                    var macasi=$(this).val();
                    $.post("lietkealbum_ajax.php",
                    {
                        macasi:macasi 
                    },
                    function(data,status){
                        if(status=="success")
                        {
                            $(".ketqua").html(data);
                        }
                    }); 
                });
            });   
        </script>
    </head>
    <body>
        <?php
            include "connect.php";
            $sql = "SELECT * FROM casi";
            $results = $connect->query($sql);
            echo "Tên ca sĩ <select class='macasi' >";
            while($rows = $results->fetch_row())
            {
                echo "<option value='$rows[0]'>$rows[1]</option>";
            }
            echo "</select><br>"; 
            echo "<div class='ketqua'></div>";
        ?>
    </body>
</html>
