<?php
class Student{

    private $name;

    private  $nic;
  
    private static $gov;

    public function set_name($name){
        $this->name = $name;

    }


    public function get_name() {
        return $this->name;
    }

    public function set_nic($nic){
        $this->nic = $nic;
    }

    public function get_nic (){
        return $this->nic;
    }


    public static function set_gov($gov){
        self::$gov = $gov;
    }

    public static function get_gov(){
        return self::$gov;
    }

}


$obj1 =new Student();
$obj1->set_name("Ishan");

echo $obj1->get_name() , "</br>";

$obj1->set_nic("1234569");

echo $obj1->get_nic() , "</br>";
Student::set_gov("JVP");
echo Student::get_gov();
?> 

