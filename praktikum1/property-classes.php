<?php

class Student
{
    var $firstName;
    var $country = "none";
}

$student1 = new Student;
$student2 = new Student;

$student1->firstName = "Rafi";
$student2->firstName = "Widikta";

echo $student1->firstName . "<br>";
echo $student2->firstName . "<br>";


$class_vars =  get_class_vars("Student");
echo "Properti milik Student";
echo "<pre>";
print_r($class_vars);
echo "</pre>";
