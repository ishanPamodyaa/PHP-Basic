<?php

$name=$_GET['userName'];

setcookie("userName","$name",time()+60*5);

header("location:dashBoard.php");

?>