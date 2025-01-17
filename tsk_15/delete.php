<?php
if(! isset($_GET['id'])){
header("location:form.php");
}else{
    require_once('db.php');
    $sql = "Delete from student where idstudent='".$_GET['id']."'";

    echo $sql;
    mysqli_query($con,$sql);
    mysqli_close($con);

    header("location:form.php");
}
?>