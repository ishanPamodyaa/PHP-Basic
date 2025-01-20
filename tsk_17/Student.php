<?php
class Student{

    public $name;

    public static $city = "Colombo";
  
    public function greeting() : void{
        echo "Good Afternoon";

    }

    public static function greeting2  () : void{
        echo "hi satic method";
    }

}

$student1 = new Student();
// $student2 = new Student();

$student1 -> name = "Ishan";

$student2=$student1;

$student2 -> name = "PAmodya";


     
echo  $student1 -> name;
Student::greeting2();
Student::$city = "Kandy";

echo Student::$city;
?> 

