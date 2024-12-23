<?php

//print_r($_POST);

$name =$_POST['userName'];
$password = $_POST['password'];

$validName=  "admin";
$validPassword = "1234";

if($name == $validName && $password == $validPassword){

    header("location:createSeasion.php?userName=$name");

}else{
    exit( "<a href=form.html><h4> Login Failed : pls Go to Login Form</h4></a>" );
}

?>