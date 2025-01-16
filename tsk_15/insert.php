<?php

print_r($_POST);
    

    if(isset($_POST['stuName']) && $_POST['stuNic'] && $_POST['stuCity']){
        $name = $_POST['stuName'];
        $nic = $_POST['stuNic'];
        $city = $_POST['stuCity'];
        
        echo "$name , $nic, $city";
        require_once('db.php');
        
        $sql = "insert into student (name,nic,city) values ('$name','$nic','$city')";

        mysqli_query($con , $sql);
        mysqli_close($con);
        header("location:form.php");

    }else {
        header("location: addStudentForm.php");
    }
?>