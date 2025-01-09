<?php
$file = fopen("logRead.txt","r");

while(!feof($file)){
    echo fgets($file),"<br/>";
}

fclose($file);

?>