<?php

$stuName = $_GET['stuName'];
$stuNic = $_GET['stuNic'];
$stuCity = $_GET['stuCity'];


$host = "localhost";
$user = "root";
$password = "root";
$db = "online";
$con = mysqli_connect($host,$user,$password,$db);

// var_dump($con);

// $sql = "insert into student (name,nic,city ) values ('$stuName','$stuNic','$stuCity')";
$sql =  "select * From student";

$rs=mysqli_query($con,$sql);
// var_dump($rs);
while($row = mysqli_fetch_assoc($rs)){
    // var_dump($row);
echo $row['idstudent']," - ",$row["name"]," - ",$row["nic"]," - ",$row["city"],"<br>";  
}

mysqli_close($con);

?>



