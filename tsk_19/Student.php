<?php
class Srilanka{


//  function __construct(){
//     echo "Obj Create </br>";
// }

//  function __destruct(){

//     echo "Obj Destroy </br>";

// }

private $name;
private $nic;

public function __construct($name , $nic){
    $this->name = $name;
    $this->nic = $nic;
}


}

$obj = new Srilanka("Ishan","123456789");

var_dump($obj);
// $obj1   = new Srilanka();

// $obj2   = new Srilanka();

//  unset($obj1 );
//  $obj3   = new Srilanka();
?> 

