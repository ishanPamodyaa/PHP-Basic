<?php

if(isset($_POST['userName']) && isset($_POST['password'])){
    $name = $_POST['userName'];
    $password = $_POST['password'];

} else {
    header("location:form.html");
    exit();    
}
    
    //valid username and password

    $validName = "admin";
    $validPassword = "1234";

    if($name == $validName && $password == $validPassword){
        
        //echo "Login Successfully";
        header("location:createCookie.php?userName=$name");

    }else {
        //echo"Login Faild";
        exit("<a href='form.html'>Login Faild : Username or Password is wrong</a>");
    }

?>