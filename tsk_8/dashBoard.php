<?php
session_start();    

if(!isset($_SESSION['userName'])){
    header("location:form.html");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <a  href=deleteSession.php><h4 style="text-align:end;">Log Out</h4></a>
        <h1 style="text-align:center">Dash Board</h1>
        
        <div style="text-align:center"> 
        <?php

            $name= $_SESSION['userName'];
             // print_r($name);
             echo"<h3>Wel Come to $name </h3>"
        ?>
        </div>
    </div>
</body>
</html>
