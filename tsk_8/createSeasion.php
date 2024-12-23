<?php

session_start();

$name =$_GET['userName'];
//echo "$name";

$_SESSION['userName'] = $name;
header("location:dashBoard.php");

?>