<?php
print_r($_POST);

if(isset($_POST['stuId']) && isset($_POST['stuName']) && isset($_POST['stuNic']) && isset($_POST['stuCity'])){
    require_once('db.php');
    $sql = "Update student set name = '".$_POST['stuName']."', nic ='".$_POST['stuNic']."', city ='".$_POST['stuCity']."' where idstudent ='".$_POST['stuId']."'";

    $rs =  mysqli_query($con , $sql);
    // echo $sql;
    mysqli_close($con);
    header("location : form.php");
    }else{
    header("location : form.php");
}

?>