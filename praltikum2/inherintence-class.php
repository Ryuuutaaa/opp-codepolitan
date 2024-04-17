<?php

class User
{
    var $firstName;
    var $lasName;
    var $username;

    function fullName()
    {
        return $this->firstName . " " . $this->lasName;
    }
}

class Customer extends User
{
}

$c = new Customer();
$c->firstName = "Rafi";
$c->lasName = "Akmal";

echo $c->fullName()  . "<br>";

if (is_subclass_of($c, "User")) {
    echo "Instance Customer merupakan subclass User <br>";
}

$parents = class_parents($c);
echo implode(", ", $parents);
