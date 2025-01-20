<?php
if(! isset($_GET['id'])){
// header("location:form.php");
}else{
    require_once('db.php');

    $sql = "select * from student where idstudent='".$_GET['id']."'";
    $rs =  mysqli_query($con , $sql);
    
    $raw = mysqli_fetch_assoc($rs);


    echo 
    '<form action="update.php" method="POST">
    <lable>Name :</lable>
        <input type="hidden" name="stuId" value="'.$raw['idstudent'].'">
        </br></br>    
        <input type="text" name="stuName" value="'.$raw['name'].'">
        </br></br>
        <label>NIC :</label>
        <input type="text" name="stuNic" value="'.$raw['nic'].'" >
        </br></br>
        <label>City :</label>
        <input type="text" name="stuCity" value="'.$raw['city'].'">
        </br></br>
        <input type="reset" value="Reset">
        <input type="submit" value="Update">
        
    </form>';

    // header("location:update.php");
}

?>