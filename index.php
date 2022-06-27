<?php

class Student
{
    public $name;
    public $age;
    public $agpa;


//getter mathod//

public function getName(){
    return$this->name;
}

public function getAge(){
    return $this->age;
}

public function getCgpa(){
    return $this->cgpa;
}

//setter mathod//

public function setName($name){
    $this->name = $name;
}
public function setAge($age){
    $this->age = $age;
}
public function setCgpa($cgpa){
    $this->cgpa =   $cgpa;
}

}

$student1 = new Student;

$student1->setName("Samira");
$student1->setAge(21);
$student1->setCgpa(3.14); 

echo $student1->getName();
echo "<br/>";
echo $student1->getAge();
echo "<br/>";
echo $student1->getCgpa();
echo "<br/>";


?>