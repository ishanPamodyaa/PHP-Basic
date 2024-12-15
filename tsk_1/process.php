<?php

$fnameArray = explode(" ",$_GET['fname']);
// print_r($fnameArray);
$length =count($fnameArray);


echo "<label for=callingName >Calling Name : </label>";
echo "<select id=callingName >";

 foreach ($fnameArray as $key => $value) {
        echo "<option>$value</option>"; 
}
echo "</select>";
?>