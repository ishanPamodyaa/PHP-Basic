<?php
$file = fopen("log.txt","a");// using d => preiviouse data cleare and new data write
fwrite($file,"person Logged in\n");
fclose($file);
?>