<?php
   echo date_default_timezone_get();
    echo date("Y-m-d h:i:s"), "</br>";
    echo date("Y-M-D H:I:S"), "</br>";
    echo date("y-m-d H:i:s"), "</br>";
    echo date("y-m-d H:i:s"), "</br>";
    date_default_timezone_set("Asia/Colombo");
    echo date("Y-m-d h:i:s A"), "</br>";
    echo date("Y-M-D H:I:S "), "</br>";
    echo date("y-m-d H:i:s"), "</br>";
    echo date("y-m-d H:i:s a" ), "</br>";

?>