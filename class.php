<?php
class Student{
    public $name;
    public $age;
    public $reg;
    public function __construct($name,$age,$reg){
        $this->name=$name;
        $this->age=$age;
        $this->reg=$reg;
    }
    public function getDetails(){
        return "Your Name is:".$this->name."<br> Your age is: ".$this->age."<br> Your Registration is: ".$this->reg;
    }
}
$object1=new Student("Aman Kumar",20,12303239);
$object2=new Student("Raman Kumar",20,12303145);
echo $object1->getDetails()."<br>";
echo $object2->getDetails();
?>