<?php
class Student{

    public $name;
    public $nic;
    public $city;

    public function greeting() : void{
        echo "Good Afternoon";

    }

}

$student = new Student();

$student -> name = "Ishan";
$student -> nic = "123";
$student -> city = "Colombo";

$student -> greeting();     
echo  $student -> name;
?> 

