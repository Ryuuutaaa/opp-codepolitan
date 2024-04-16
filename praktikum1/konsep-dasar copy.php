<?php

class Student
{
}

$classess = get_declared_classes();

echo "Classess : " . implode(" ", $classess) . "<br>";

$classNames = ["Produc", "Student", "student"];

foreach ($classNames as $className) {
    if (class_exists($className)) {
        echo "{$className} class sudah ada. <br>";
    } else {
        echo "{$className} class tidak ada";
    }
}
