<html>
    <body>
        <?php 
        if(empty($_GET)){
            ?>ใส่ค่า language<?php
        }
        else{
            if(!isset($_COOKIE["lang"])){
                setcookie("lang",$_GET["language"],time()+3600*24);
                ?>สร้าง cookie lang แล้ว<?php
            }else{
                setcookie("lang",$_GET["language"],time()+3600*24);
                ?>กำหนดค่า cookie lang ใหม่แล้ว<?php
            }
        }         
        ?>
</body>
</html>
