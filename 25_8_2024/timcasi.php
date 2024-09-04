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
                 $(".tim").blur(function(){
                    var tencasi=$(this).val(); 
                    $.get("timcasi_ajax.php?ten="+tencasi,function(data,status){
                        if(status=='success')
                            $(".ketqua").html(data); 
                    }); 

                 });
             });          
        </script>         
    </head>
    <body>
        Tên <input type="text" class="tim"><br>
        <div class="ketqua"></div>
    </body>
</html>
