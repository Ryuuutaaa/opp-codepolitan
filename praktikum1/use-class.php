<?php

class Student
{
    var $firstName;
    var $lastName;

    var $country = "none";

    function sayHello()
    {
        return "Hello world";
    }

    function fullName()
    {
        return $this->firstName . " " . $this->lastName;
    }
}

$student1 = new Student;
$student2 = new Student;

$student1->firstName = "Rafi";
$student2->firstName = "Widikta";

$student1->lastName = "Usnida";
$student2->lastName = "Auorell";


echo $student1->firstName . "<br>";
echo $student2->firstName . "<br>";

echo $student1->sayHello() . "<br>";
echo $student2->sayHello() . "<br>";

echo $student1->fullName() . "<br>";
echo $student2->fullName() . "<br>";


$class_methods =  get_class_methods("Student");
echo "Properti milik Student";
echo "<pre>";
print_r($class_methods);
echo "</pre>";

if (method_exists("Student", "sayHello")) {
    echo "Method sayHello tersedia";
} else {
    echo "Method sayHello tidak tersedia";
}
