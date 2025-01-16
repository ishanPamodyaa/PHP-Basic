<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Student Table</h1>
<table border="1" width="100%"> 
<thead>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>NIC</th>
    <th>City</th>
</tr>
</thead>
<tbody>
    <?php
    require_once('db.php');

    $sql = "select * From student";
    $rs = mysqli_query( $con , $sql);
    // var_dump($rs);

    while($row = mysqli_fetch_array($rs)){

        echo "<tr>";
        echo "<td>" .$row[0]."</td>";
        echo "<td>" .$row[1]."</td>";
        echo "<td>" .$row[2]."</td>";
        echo "<td>" .$row[3]."</td>";

    }
    ?>
</tbody>
</table>
</body>

</html>